<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $qty = $request->qty;

        $product_id = $request->product_id;

        $product_info = DB::table('products')
            ->where('id', $product_id)
            ->first();

        $productImageInfo = DB::table('product_images')
            ->select('image')
            ->where('product_id', $product_id)
            ->first();

        $productSizeInfo = DB::table('product_sizes')
            ->select('size')
            ->where('product_id', $product_id)
            ->first();

        $productColorInfo = DB::table('product_colors')
            ->select('color')
            ->where('product_id', $product_id)
            ->first();

        $data['id'] = $product_info->id;
        $data['name'] = $product_info->title;
        $data['price'] = $product_info->price;
        $data['qty'] = $qty;
        $data['options']['image'] = $productImageInfo->image;

        if ($request->size) {
            $data['options']['size'] = $productSizeInfo->size;
        }

        if ($request->color){
            $data['options']['color'] = $productColorInfo->color;
        }

        cart::add($data);

        return redirect('cart');


    }

    public function cartDetails()
    {
        $cartContents = Cart::content();
        return view('frontend.cart.details', compact('cartContents'));
    }

    public function deleteSingleCart($item_id)
    {
        Cart::remove($item_id);
        return back();
    }

    public function updateCart(Request $request)
    {

        $rowId = $request->rowId;
        $qty = $request->qty;
        Cart::update($rowId, $qty);
        return back();
    }


}
