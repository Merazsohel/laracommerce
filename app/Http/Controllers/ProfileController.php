<?php

namespace App\Http\Controllers;

use App\Address;
use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:customer');
    }
    public function profile()
    {
//        $orders=Order::with('product')->where('customer_id',Auth::guard('customer')->user()->id)->get();
        $totalColpleteOrders=Order::where('cycle','success')
            ->where('customer_id',Auth::guard('customer')->user()->id)->count();
        $totalPendingOrders=Order::where('cycle','new')
            ->orWhere('cycle','ondelivery')
            ->where('customer_id',Auth::guard('customer')->user()->id)->count();
        $totalAmount=Order::where('cycle','success')
            ->where('customer_id',Auth::guard('customer')->user()->id)
            ->select(DB::raw('sum(total) as total'))
            ->groupBy('customer_id')->first();
        $profile=Customer::where('id',Auth::guard('customer')->user()->id)->first();
        return view('front.customer.profile',compact('profile','totalColpleteOrders','totalPendingOrders','totalAmount'));
    }

    public function edit($id)
    {
        if ($id) {
            $profile = Address::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->first();
            if(!empty($profile))
            {
                return view('front.customer.edit', compact('profile'));
            }
            else {
                return redirect()->route('checkout');
            }

        } else {
            return redirect()->route('checkout');
        }
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
        Address::where('id',$id)->where('customer_id',Auth::guard('customer')->user()->id)->update($request->except('_token','_method'));
        return redirect()->route('checkout')->with('success','Address Updated.');
    }

    public function delete($id)
    {
        if(Address::where('id', $id)->where('customer_id', Auth::guard('customer')->user()->id)->delete())
        {
            return redirect()->route('checkout')->with('success','Address Deleted.');
        }
        return redirect()->route('checkout');

    }


}
