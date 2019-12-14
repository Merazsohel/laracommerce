<?php

namespace App\Http\Controllers\Front;
use App\Product;
use Gloudemans\Shoppingcart\Cart;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function show($title,$id)
    {
       $product = Product::with('color','size','image','review')
            ->where('id',$id)
            ->where('title',$title)
            ->first();

            $similiarProducts = Product::with('singleImage','discount')->where('id', '!=', $id)
                ->where('child_category',$product->child_category)
                ->inRandomOrder()->limit(12)
                ->get();

            return view('frontend.product.show',compact('product','similiarProducts'));

    }

}
