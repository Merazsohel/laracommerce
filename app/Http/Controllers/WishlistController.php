<?php

namespace App\Http\Controllers;

use App\Product;
use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function addwishlist(Request $request)
    {
        $product=Product::select('id','title')->where('id',$request->product_code)->first();
        if(!is_null($product))
        {
            Wishlist::create(['product_id'=>$product->id,'customer_id'=>Auth::guard('customer')->user()->id]);
            return redirect()->route('productdetails',['title'=>str_replace(' ','-',$product->title),'id'=>$product->id]);
        }
        else
        {
            return redirect()->route('productdetails',['title'=>str_replace(' ','-',$product->title),'id'=>$product->id]);
        }
    }

    public function allwishlist()
    {
        $wishlists=Wishlist::with('product')->where('customer_id',Auth::guard('customer')->user()->id)->get();
        return view('front.product.wishlist',compact('wishlists'));
    }
    
    public function wishlistremove(Request $request)
    {
        if(Wishlist::where('product_id',$request->pcode)->where('customer_id',Auth::guard('customer')->user()->id)->delete())
        {
            return redirect()->back();
        }
        return redirect()->back();
    }
}
