<?php

namespace App\Http\Controllers\Front;

use App\Brand;
use App\Product;
use App\Category;
use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::with('singleImage', 'subcategory', 'discount')->take(8)->get();

        $specialProducts = Product::with('singleImage', 'subcategory', 'discount')->take(3)->get();

        $brands = Brand::select('photo')->get();

        $adsliders = Advertisement::where('position', 'slider')->get();

        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get();

        $admiddles = Advertisement::where('position', 'middle')->limit(3)->orderBy('id', 'DESC')->get();

        $categories = DB::table('categories')->select('category', 'id', 'photo')->get();

        $categorywithproducts = Category::with('product')->get();

        return view('frontend.index', compact([
            'products', 'specialProducts', 'brands', 'categories', 'adsliders', 'adsidebars', 'admiddles', 'categorywithproducts'
        ]));
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
        $products = Product::where('title', 'LIKE', '%' . $query . '%')->get();
        $adsliders = Advertisement::where('position', 'slider')->get(); // home page slider
        $adsidebars = Advertisement::where('position', 'sidebar')->limit(2)->orderBy('id', 'DESC')->get(); // home page slider aside two ad

        return view('frontend.product.search_product', compact('products', 'adsliders', 'adsidebars'));
    }


    public function customerRegister(Request $request)
    {

        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['email_address'] = $request->email_address;
        $data['password'] = md5($request->password);
        $data['mobile_number'] = $request->mobile_number;
        $data['address'] = $request->address;

        $customer_id = DB::table('customers')
            ->insertGetId($data);

        Session::put('customer_id', $customer_id);
        Session::put('address', $request->address);
        Session::put('customer_name', $request->customer_name);
        return redirect('checkout');
    }

    public function customerLogin(Request $request)
    {
        $email_address = $request->email_address;
        $password = $request->password;

        $result = DB::table('customers')
            ->select('*')
            ->where('email_address', $email_address)
            ->where('password', md5($password))
            ->first();

        if ($result) {
            Session::put('customer_id', $result->id);
            Session::put('customer_name', $result->customer_name);
            Session::put('address',$result->address);
            return redirect('checkout');
        } else {

            Session::put('message', 'Your User Id or Password Invalid!');
            return redirect::to('/login');
        }
    }

    public function customerLogout()
    {
        Session::put('customer_id', '');
        Session::put('customer_name', '');
        return redirect::to('/');

    }


}
