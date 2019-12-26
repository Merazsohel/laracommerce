<?php

namespace App\Http\Controllers\Front;

use App\Customer;
use App\Product;
use App\Http\Controllers\Controller;
use App\Reviews;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function show($title, $id)
    {
        $profile = Customer::where('id', Session::get('customer_id'))
            ->first();

        $reviews = Reviews::all()->where('product_id', $id);

        if ($title != null && $id != null) {

            $cart = Cart::content();

            $product = Product::with('color', 'size', 'image', 'review')
                ->where('id', $id)
                ->where('title', $title)
                ->first();

            if ($product != null) {

                $similiarProducts = Product::with('singleImage', 'discount')->where('id', '!=', $id)
                    ->where('child_category', $product->child_category)
                    ->inRandomOrder()
                    ->limit(12)
                    ->get();

                return view('frontend.product.show', compact('product', 'cart', 'similiarProducts', 'profile', 'reviews'));
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }
    }

}
