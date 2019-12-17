<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{

    public function profile()
    {

        $orders = DB::table('orders')
                ->join('order_products', 'orders.id', '=', 'order_products.order_id')
                ->select('orders.customer_id', 'orders.total', 'order_products.product_id','orders.created_at','orders.cycle')
                ->where('customer_id',Session::get('customer_id'))
                ->get();


        $profile = Customer::where('id', Session::get('customer_id'))
                    ->first();

        return view('frontend.customer.profile', compact('profile', 'orders'));
    }


}
