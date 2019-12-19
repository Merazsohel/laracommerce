<?php

namespace App\Http\Controllers;

use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function store(Request $request)
    {
        session()->forget('address');
        $request['customer_id'] = Auth::guard('customer')->user()->id;
        $address = Address::create($request->except('_token'));
        session()->put('addressid', $address->id);
        session()->put('address', $request->city);
        return redirect()->back();
    }

    public function existingStore(Request $request)
    {
        session()->put('address', $request->city);
        session()->put('addressid', $request->id);
    }

    public function alteraddress(Request $request)
    {
        session()->forget('address');
        session()->forget('addressid');
    }

}
