<?php

namespace App\Http\Controllers\Front;
use App\Brand;
use App\Product;
use App\Category;
use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('singleImage','subcategory','discount')->take(8)->get();

        $specialProducts = Product::with('singleImage','subcategory','discount')->take(3)->get();

        $brands = Brand::select('photo')->get();

        $adsliders  = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles  = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category','id','photo')->get();

        $categorywithproducts=Category::with('product')->get();

        return view('frontend.index',compact([
            'products','specialProducts', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles','categorywithproducts'
        ]));
    }

    public function search(Request $request){
        $query = $request->get('q','');

        $products = Product::where('title','LIKE','%'.$query.'%')->get();

        $data=array();

        foreach ($products as $product) {
            $data[] = array('value'=>$product->title,'id'=>$product->id);
        }

        if(count($data))
            return $data;
        else
            return ['value'=>'No Result Found','id'=>''];
    }

    public function searchResult(Request $request)
    {
        $query = $request->get('q','');
        $products = Product::where('title','LIKE','%'.$query.'%')->get();
        $adsliders  = Advertisement::where('position', 'slider')->get(); // home page slider
        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get(); // home page slider aside two ad

        return view('frontend.product.search_product',compact('products','adsliders','adsidebars'));
    }



}
