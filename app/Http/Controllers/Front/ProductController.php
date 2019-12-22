<?php

namespace App\Http\Controllers\Front;

use App\Advertisement;
use App\Brand;
use App\Category;
use App\Customer;
use App\Product;
use App\Http\Controllers\Controller;
use App\Reviews;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function show($title, $id)
    {
        $profile = Customer::where('id', Session::get('customer_id'))
            ->first();

        $reviews = Reviews::all()->where('product_id',$id);

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

                return view('frontend.product.show', compact('product', 'cart', 'similiarProducts','profile','reviews'));
            } else {
                return redirect()->route('index');
            }
        } else {
            return redirect()->route('index');
        }

    }

    public function brandWiseProductList($id)
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')
            ->where('brand_id',$id)
            ->paginate('6');

        $brands = Brand::select('id','name')->get();

        $adsliders = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category', 'id', 'photo')->get();

        $categorywithproducts = Category::with('product')->get();

        $allCategories=[];

        $data = Category::with('subcategory')->select('id','category')->get();

        $allCategories['allCategories'] = $data;



        return view('frontend.index', compact([
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'categorywithproducts','data'
        ]));

    }

    public function lowToHigh()
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')->orderBy('price','asc')->paginate('6');

        $brands = Brand::select('id','name')->get();

        $adsliders = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category', 'id', 'photo')->get();

        $categorywithproducts = Category::with('product')->get();

        $allCategories=[];

        $data = Category::with('subcategory')->select('id','category')->get();

        $allCategories['allCategories'] = $data;



        return view('frontend.index', compact([
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'categorywithproducts','data'
        ]));
    }

    public function highToLow()
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')->orderBy('price','desc')->paginate('6');

        $brands = Brand::select('id','name')->get();

        $adsliders = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category', 'id', 'photo')->get();

        $categorywithproducts = Category::with('product')->get();

        $allCategories=[];

        $data = Category::with('subcategory')->select('id','category')->get();

        $allCategories['allCategories'] = $data;



        return view('frontend.index', compact([
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'categorywithproducts','data'
        ]));
    }

    public function priceFilter(Request $request)
    {
        $start =  $request->min;
        $end     = $request->max;

        $products = Product::with('singleImage', 'subcategory', 'discount')
            ->where('price','>=',$start)
            ->where('price','<=',$end)
            ->paginate('6');

        $brands = Brand::select('id','name')->get();

        $adsliders = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category', 'id', 'photo')->get();

        $categorywithproducts = Category::with('product')->get();

        $allCategories=[];

        $data = Category::with('subcategory')->select('id','category')->get();

        $allCategories['allCategories'] = $data;



        return view('frontend.index', compact([
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'categorywithproducts','data'
        ]));
    }

}
