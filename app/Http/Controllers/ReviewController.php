<?php

namespace App\Http\Controllers;

use App\Product;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function review($title,$id)
    {
        if($title!='' && $id!='')
        {
            $product=Product::with('singleImage')
                ->select('id','title')
                ->where('id',$id)
                ->where('title',str_replace('-',' ',$title))
                ->first();
            session()->put('product_id',$id);
            return view('front.review.review',compact('product'));
        }
        return view('front.review.review');
    }

    public function post(Request $request)
    {
        $request['product_id']=session('product_id');
        $request['customer_id']=Auth::guard('customer')->user()->id;
        Reviews::create($request->except('_token'));
        session()->forget('product_id');
        return redirect()->back()->with('reviewpublish','Review Published Successfully.');
    }

    public function reviews()
    {
        $reviews=Reviews::with('product')->where('customer_id',Auth::guard()->user()->id)->get();
        return view('front.customer.review',compact('reviews'));
    }
}
