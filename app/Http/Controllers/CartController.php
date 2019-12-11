<?php

namespace App\Http\Controllers;

use App\Product;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        $data=array();
        $product=Product::with('singleImage')->where('id',$request->number)->first();
        if($request->has('attr'))
        {
          Cart::add($request->number,$product->title,1,$product->price,['supplier_price'=>$product->supplierprice,'image'=>$product->singleImage->image
           ,'attr'=>implode(",",$request->attr)]);
        }else
        {
            Cart::add($request->number,$product->title,1,$product->price,['supplier_price'=>$product->supplierprice,'image'=>$product->singleImage->image
            ]);
        }
        return $data=['content'=>count(Cart::content()),'total'=>Cart::subtotal()];
    }

    public function cartDetails()
    {
        $cartContents=Cart::content();

        return view('frontend.cart.details',compact('cartContents'));
    }

    public function destroy(Request $request)
    {
        Cart::remove($request->id);
    }

    public function add(Request $request)
    {
      Cart::update($request->row,$request->qty+1);
        return Cart::get($request->row)->price;
    }

    public function remove(Request $request)
    {
       Cart::update($request->row,$request->qty-1);
        return Cart::get($request->row)->price;
    }

    public function clearall(Request $request)
    {
        Cart::destroy();
        return redirect()->back();
    }
}
