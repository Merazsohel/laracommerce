<?php

namespace App\Http\Controllers\Back\Order;

use App\Delivery;
use App\Order;
use App\Orderdelivery;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $orders = Order::all();
        return view('back.order.index', compact('orders'));
    }


    public function search(Request $request)
    {
        $fromdate = $request->from;
        $todate = $request->to;
        $from = $fromdate . ' ' . '00:00:00';
        $to = $todate . ' ' . '23:59:59';
        $orders = Order::with('customer', 'address')->whereBetween('created_at', array($from, $to))->paginate(20);
        return view('back.order.index', compact('orders'));
    }


    public function show($id)
    {
        $order = Order::with('customer', 'address', 'product')->where('id', $id)->first();
        return view('back.order.show', compact('order'));
    }


    public function destroy($id)
    {
        Order::where('id', $id)->delete();
        return redirect()->back()->with('success', 'Order Deleted.');
    }

    public function status($status)
    {
        if ($status != null) {

            $orders = Order::with('customer', 'address')
                ->where('cycle', $status)
                ->paginate(20);

            return view('back.order.index', compact('orders'));
        }

        return redirect()->route('orderindex');
    }

    public function orderProductDelete(Request $request, $id)
    {
        $product = Product::where('id', $request->product_id)
            ->select('price')
            ->first();

        $total = Order::where('id', $request->order_id)
            ->select('total')
            ->first();

        $qty = DB::table('order_products')
            ->where('id', $id)
            ->select('qty')
            ->first();

        Order::where('id', $request->order_id)
            ->update(['total' => $total->total - $qty->qty * $product->price]);

        DB::table('order_products')
            ->where('id', $id)
            ->delete();

        return redirect()->back()->with('success', 'Product Removed.');
    }

    public function getDeliveryCompany(Request $request)
    {
        return Delivery::select('id', 'name')->get();
    }

    public function deliveryConfirm(Request $request)
    {
        if ($request->type == 'ondelivery') {

            $cost = Order::where('id', $request->order_id)
                ->select('delivery_charge', 'total')
                ->first();

            Order::where('id', $request->order_id)
                ->update(['cycle' => 'ondelivery']);

            Orderdelivery::create(['order_id' => $request->order_id, 'delivery_id' => $request->company_id, 'delivery_charge' => $cost->delivery_charge]);

        } else if ($request->type == 'returnorder') {

            Order::where('id', $request->order_id)
                ->update(['cycle' => 'return']);

            Orderdelivery::where('order_id', $request->order_id)->delete();

        } else if ($request->type == 'success') {

            $data = DB::table('order_products')
                ->leftJoin('products', 'products.id', 'order_products.product_id')
                ->rightJoin('suppliers', 'suppliers.id', 'products.supplier_id')
                ->select('suppliers.id as id', 'qty', DB::raw('sum(supplierprice*qty) as payable'))
                ->where('order_products.order_id', $request->order_id)
                ->groupBy('products.supplier_id')
                ->get();

            for ($i = 0; $i < sizeof($data); $i++) {
                DB::table('supplier_payment')
                    ->insert(['supplier_id' => $data[$i]->id,
                        'order_id' => $request->order_id,
                        'payable' => $data[$i]->payable,
                        'paid' => 0,
                        'month' => Carbon::now()->format('F'),
                        'date' => Carbon::now()->format('d-m-y')
                    ]);
            }

            Order::where('id', $request->order_id)
                ->update(['cycle' => 'success']);
        }

    }
}
