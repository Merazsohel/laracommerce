<?php

namespace App\Http\Controllers;

use App\Address;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function edit($id)
    {
        if ($id) {
            $profile = Address::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->first();
            if (!empty($profile)) {
                return view('front.customer.edit', compact('profile'));
            } else {
                return redirect()->route('checkout');
            }

        } else {
            return redirect()->route('checkout');
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
        Address::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->update($request->except('_token', '_method'));
        return redirect()->route('checkout')->with('success', 'Address Updated.');
    }

    public function delete($id)
    {
        if (Address::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->delete()) {
            return redirect()->route('checkout')->with('success', 'Address Deleted.');
        }
        return redirect()->route('checkout');

    }


}
