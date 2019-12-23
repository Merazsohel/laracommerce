<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

    public function profile()
    {

        $orders = DB::table('orders')
            ->join('order_products', 'orders.id', '=', 'order_products.order_id')
            ->select('orders.customer_id', 'orders.total', 'order_products.product_id', 'order_products.qty', 'orders.created_at', 'orders.cycle')
            ->where('customer_id', Session::get('customer_id'))
            ->get();

       /* $products = Order::with('product')->where('customer_id',Session::get('customer_id'))->get();*/

        $profile = Customer::where('id', Session::get('customer_id'))
            ->first();

        return view('frontend.customer.profile', compact('profile', 'orders', 'productName','products'));
    }

    public function updateProfile(Request $request, $id)
    {
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = $request->password;
        $data['mobile_number'] = $request->mobile_number;
        $data['address'] = $request->address;
        $data['created_at'] = Carbon::now();
        $data['updated_at'] = Carbon::now();

        DB::table('customers')
            ->where('id', $id)
            ->update($data);

        return redirect('account');
    }


}
