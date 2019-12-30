<?php

namespace App\Http\Controllers\Front;

use App\Brand;
use App\Customer;
use App\Product;
use App\Category;
use App\Advertisement;
use App\Reviews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Gloudemans\Shoppingcart\Facades\Cart;


class HomeController extends Controller
{

    public function index()
    {
        $products = $this->getProducts();

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getRightAdSliders();

        $admiddles =  $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $categorywithproducts = Category::with('product')->get();

        $data = $this->getSubCategories();

        return view('frontend.index', compact('products', 'brands', 'categories', 'adsliders',
                                                    'adsidebars', 'admiddles', 'categorywithproducts', 'data'));
    }

    public function show($title, $id)
    {
        $profile = Customer::where('id', Session::get('customer_id'))
            ->first();

        $reviews = Reviews::all()->where('product_id', $id);

        $cart = Cart::content();

        $product = Product::with('color', 'size', 'image', 'review')
                ->where('id', $id)
                ->where('title', $title)
                ->first();

         $similiarProducts = Product::with('singleImage', 'discount')->where('id', '!=', $id)
                ->where('child_category', $product->child_category)
                ->inRandomOrder()
                ->limit(12)
                ->get();

         return view('frontend.product.show', compact('product', 'cart', 'similiarProducts', 'profile', 'reviews'));


    }


    public function search(Request $request)
    {
        $query = $request->get('q', '');

        $products = Product::where('title', 'LIKE', '%' . $query . '%')->get();

        $data = array();

        foreach ($products as $product) {
            $data[] = array('value' => $product->title, 'id' => $product->id);
        }

        if (count($data))
            return $data;
        else
            return ['value' => 'No Result Found', 'id' => ''];
    }

    public function searchResult(Request $request)
    {
        $query = $request->get('q', '');

        $products = Product::with('singleImage', 'subcategory', 'discount')
            ->where('title', 'LIKE', '%' . $query . '%')
            ->paginate('6');

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getMiddleAdSliders();

        $admiddles = $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $data = $this->getSubCategories();

        return view('frontend.index', compact('products', 'brands', 'categories',
                                                    'adsliders', 'adsidebars', 'admiddles', 'data'));
    }
    public function brandWiseProductList($id)
    {
        $products = $this->getProducts();

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getRightAdSliders();

        $admiddles = $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $data = $this->getSubCategories();


        return view('frontend.index', compact(
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'data'
        ));

    }

    public function lowToHigh()
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')->orderBy('price','asc')->paginate('6');

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getMiddleAdSliders();

        $admiddles = $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $data = $this->getSubCategories();


        return view('frontend.index', compact(
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'data'
        ));
    }

    public function highToLow()
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')->orderBy('price','desc')->paginate('6');

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getMiddleAdSliders();

        $admiddles = $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $data = $this->getSubCategories();

        return view('frontend.index', compact(
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'data'
        ));
    }

    public function priceFilter(Request $request)
    {
        $start =  $request->min;
        $end     = $request->max;

        $products = Product::with('singleImage', 'subcategory', 'discount')
            ->where('price','>=',$start)
            ->where('price','<=',$end)
            ->paginate('6');

        $brands = $this->getBrands();

        $adsliders = $this->getAdSliders();

        $adsidebars = $this->getMiddleAdSliders();

        $admiddles = $this->getMiddleAdSliders();

        $categories = $this->getAllCategories();

        $data = $this->getSubCategories();

        return view('frontend.index', compact(
            'products', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles','data'
        ));
    }


    public function getBrands()
    {
       return  Brand::select('id', 'name')->get();
    }

    public function getAdSliders()
    {
        return Advertisement::where('position', 'slider')->get();
    }

    public function getRightAdSliders()
    {
        return Advertisement::where('position', 'sidebar')
            ->limit(2)
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function getMiddleAdSliders()
    {
        return Advertisement::where('position', 'middle')
            ->limit(3)
            ->orderBy('id', 'DESC')
            ->get();
    }

    public function getAllCategories()
    {
        return DB::table('categories')
            ->select('category', 'id', 'photo')
            ->get();
    }

    public function getSubCategories()
    {
        return Category::with('subcategory')
            ->select('id', 'category')
            ->get();
    }

    public function getProducts()
    {
        return Product::with('singleImage', 'subcategory', 'discount','color','size')
            ->paginate('8');
    }


}
