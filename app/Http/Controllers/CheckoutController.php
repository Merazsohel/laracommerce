<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;

class CheckoutController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function checkout()
    {
        if(count(Cart::content())>=1)
        {
            $addresses=Address::where('customer_id',Auth::guard('customer')->user()->id)->get();
            return view('frontend.cart.checkout',compact('addresses'));
        }else
        {
            return redirect()->route('index')->with('carterror','Your cart is empty.');
        }
        
    }
}
