<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function placeorder(Request $request)
    {
        $request['address_id']=session('addressid');
        $request['delivery_charge']=60;
        $request['total']=floatval(str_replace(',','',Cart::subtotal()));
        $request['customer_id']=Auth::guard('customer')->user()->id;
        $request['code']=mt_rand(100000000, 999999999);

        if($order=Order::create($request->except('_token')))
        {
            foreach (Cart::content() as $cart)
            {
                DB::table('order_products')->insert(['order_id'=>$order->id,'product_id'=>$cart->id,'qty'=>$cart->qty,'attr'=>$cart->options->attr,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);
            }
            session()->forget('addressid');
            session()->forget('address');
            Cart::destroy();
            return redirect()->route('profile')->with('orderconfirm','Your order has been placed.');
        }
    }

    public function order()
    {
        $orders=Order::with('customer')->where('customer_id',Auth::guard('customer')->user()->id)->get();
        return view('front.customer.orders',compact('orders'));
    }

    public function orderdetails($p1,$id)
    {
        if($p1=='details' && $id!='')
        {
            $order=Order::with('product')->where('id',$id)->where('customer_id',Auth::guard('customer')->user()->id)->first();
               return view('front.customer.order-details',compact('order'));
        }else
        {
            App::abort(404);
        }
    }
}
