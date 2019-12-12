<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class CustomerRegistrationController extends Controller
{
    protected $redirectTo = 'auth';

    public function showRegistrationForm()
    {
        return view('frontend.customer.login');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255|unique:customers',
            'password' => 'required|string|min:6|confirmed',
            'gender' => 'required',
            'fname' => 'required',
        ]);
    }

    public function register(Request $request)
    {
        $this->create($request->all());
        return redirect()->route('customerlogin')->with('registersuccess','Registration Successful. Now You Can Login.');
    }

    protected function create(array $data)
    {
        return Customer::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'gender' => $data['gender'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    protected function guard()
    {
        return Auth::guard('customer');
    }
}
