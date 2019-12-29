<?php

namespace App\Http\Controllers\Front;

use App\Customer;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Newsletter;


class WelComeController extends Controller
{
    public function customerRegister(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'email_address' => 'required|unique:customers',
            'password' => 'required|min:6|max:12|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'mobile_number' => 'required|unique:customers',
            'address' => 'required',
        ],

    [
        'customer_name.required' => 'Name field is required!',
        'email_address.required' => 'Email address field is required!',
        'email_address.unique' => 'This email address already exist!',
        'password.required' => 'Password field is required!',
        'mobile_number.required' => 'Mobile number field is required!',
        'mobile_number.unique' => 'This mobile number already exist!',
        'address.required' => 'Address field is required!'
    ]);

        $data = [];
        $data['customer_name'] = $request->customer_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);
        $data['mobile_number'] = $request->mobile_number;
        $data['address'] = $request->address;

        $customer_id = DB::table('customers')
            ->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('email_address', $request->email_address);
        Session::put('address', $request->address);
        Session::put('customer_name', $request->customer_name);

        if (Cart::content()->isEmpty()){
            return redirect('/');
        }else{
            return redirect('checkout');
        }

    }

    public function customerLoginView()
    {
        return view('frontend.customer.login');
    }

    public function customerLogin(Request $request)
    {
        $request->validate([
            'email_address' => 'required',
            'password' => 'required',

        ],
            [
                'email_address.required' => 'Please fill up your Email Address!',
                'password.required' => 'Please fill up your password!'
            ]);

        $email_address = $request->email_address;
        $password = $request->password;

        $result = DB::table('customers')
            ->select('*')
            ->where('email_address', $email_address)
            ->where('password', md5($password))
            ->first();

        if ($result) {
            Session::put('customer_id', $result->id);
            Session::put('customer_name', $result->customer_name);
            Session::put('email_address', $result->email_address);
            Session::put('address', $result->address);

            if (Cart::content()->isEmpty()) {
                return redirect('/');
            } else {
                return redirect('checkout');
            }

        } else {

            Session::flash('message', 'Email Or Password Incorrect!');
            return redirect::to('customer-login');
        }
    }

    public function customerLogout()
    {
        Session::put('customer_id', '');
        Session::put('customer_name', '');
        return redirect::to('/');

    }

    public function forgotPassword(){
        return view('frontend.customer.forgot-password');
    }

    public function sentForgotPassword(Request $request)
    {
        $user = DB::table('customers')->where('email_address', '=', $request->email_address)
            ->first();

        if (is_array($user) && count($user) < 1) {
            return redirect()->back()->withErrors(['email' => trans('User does not exist')]);
        }

        DB::table('password_resets')->insert([
            'email_address' => $request->email_address,
            'token' => str_random(60),
            'created_at' => Carbon::now()
        ]);

        $tokenData = DB::table('password_resets')
            ->where('email_address', $request->email_address)->first();

        if ($this->sendResetEmail($request->email_address, $tokenData->token)) {

            return redirect()->back()->with('message', 'Reset password link sent to your email');

        }else{
            return redirect()->back()->with('message', 'Reset password link sent to your email');
        }
    }

    private function sendResetEmail($email, $token)
    {

        $user = DB::table('customers')->where('email_address', $email)->select('email_address')->first();

        $link = 'frontend.mail.reset';

        $data["email_address"] = $user->email_address;

        Mail::send($link,$data, function ($message) use ($user) {
            $message->to($user->email_address, 'Meraz')
                ->subject('Password Reset');
        });

    }

    public function resetPasswordForm()
    {
        return view('frontend.customer.reset-password');
    }

    public function resetPassword(Request $request)
    {

        $request->validate([ 'email_address' => 'required|exists:customers,email_address','password' => 'required']);

        $password = $request->password;

        $email = $request->email_address;

        $user = Customer::where('email_address', $email)->first();

        if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);

        $user->password = md5($password);

        $user->update();

        DB::table('password_resets')->where('email_address', $email)
            ->delete();

        return redirect('customer-login')->with('message', 'Congratulation! Successfully you reset your password');
    }

    public function newsletter(Request $request)
    {
        return redirect()->back()->with('message', 'Thanks For Subscribe');

       /* if ( ! Newsletter::isSubscribed($request->email) )
        {
            Newsletter::subscribePending($request->email);
            return redirect('newsletter')->with('message', 'Thanks For Subscribe');
        }*/
       // return redirect('index')->with('error', 'Sorry! You have already subscribed ');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function contactStore(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:customers',
            'phone' => 'required|min:6|max:12|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/',
            'subject' => 'required|unique:customers',
            'message' => 'required',
        ],

    [
        'name.required' => 'Required',
        'email.required' => 'Required',
        'phone.required' => 'Required',
        'subject.required' => 'Required',
        'message.required' => 'Required'
    ]);

        $data = [];
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['phone'] = $request->phone;
        $data['subject'] = $request->subject;
        $data['message'] = $request->message;
        $data['created_at'] = carbon::now();
        $data['updated_at'] = carbon::now();

        DB::table('contacts')->insert($data);

        return redirect('contact-us')->with('message', 'Successfully Submitted! ');

    }

    public function faq(){
        return view('frontend.faq');
    }

    public function about(){
        return view('frontend.about');
    }


}
