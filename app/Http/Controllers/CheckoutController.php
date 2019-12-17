<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{



    public function checkout()
    {
        $customer_id = Session::get('customer_id');
        $customer_info = DB::table('customers')
            ->where('id', $customer_id)
            ->first();

        if (Session::get('customer_id')) {
            return view('frontend.cart.checkout', compact('customer_info'));
        } else {
            return view('frontend.customer.login');
        }
        
    }
      public function shipping(){
        return view('frontend.cart.shipping');
    }
}
