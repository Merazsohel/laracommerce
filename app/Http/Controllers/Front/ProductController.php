<?php

namespace App\Http\Controllers\Front;

use App\Product;
use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
class ProductController extends Controller
{
    public function show($title, $id)
    {
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

                return view('frontend.product.show', compact('product', 'cart', 'similiarProducts'));
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }

    }

}
