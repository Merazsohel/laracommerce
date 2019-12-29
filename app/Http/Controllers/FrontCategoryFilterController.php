<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Childcategory;
use App\Product;
use Illuminate\Support\Facades\DB;

class FrontCategoryFilterController extends Controller
{

    public function category($category)
    {
        $category = Category::with('product', 'subcategory')
            ->where('category', (str_replace("-", ' ', str_replace("s-", "'s ", $category))))
            ->first();
        if (!is_null($category)) {
            return view('front.product.category-filter', compact('category'));
        }
        return redirect()->route('index');
    }

    public function subcategory($subcategory, $id)
    {
        if ($subcategory != '' && $id != '') {
            $childcaegories = Childcategory::where('subcategory_id', $id)->get();
            $brands = Brand::select('name', 'id')->get();
            $products = Product::where('child_category', $id)->get();
            return view('frontend.product.subcategory-product', compact('products', 'childcaegories', 'brands'));
        }
        return redirect()->route('index');
    }

    public function childcategory($child, $id)
    {
        if ($child != '' && $id != '') {

            $childcaegory = Childcategory::where('id', $id)->select('id', 'childcategory')->first();
            $subcategories = DB::table('childcategories')
                ->rightJoin('subcategories', 'childcategories.subcategory_id', 'subcategories.id')
                ->select('subcategory', 'subcategories.id')
                ->distinct('subcategory_id')
                ->get();

            $brands = DB::table('brands')->leftJoin('products', 'products.id', 'products.brand_id')
                ->where('child_category', $id)
                ->select('name', 'brands.id')
                ->get();

            $products = Product::where('child_category', $id)->get();

            return view('frontend.product.subcategory-product', compact('products', 'childcaegory', 'brands', 'subcategories'));

        } else {
            return redirect()->route('index');
        }

    }

}
