<?php

namespace App\Http\Controllers\Back\Product;

use App\Brand;
use App\Category;
use App\Childcategory;
use App\Color;
use App\Product;
use App\ProductColor;
use App\ProductImage;
use App\CustomClasses\ManageImage;
use App\ProductSize;
use App\Size;
use App\Subcategory;
use App\Supplier;
use App\Discount;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $products = Product::all();
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();

        return view('back.product.index', compact('products', 'suppliers', 'brands',
                                                            'categories', 'subcategories', 'childcategories'));
    }

    public function create()
    {
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $colors = Color::all();
        $sizes = Size::all();

        return view('back.product.create', compact('categories', 'subcategories', 'childcategories',
                                                                   'suppliers', 'brands','colors','sizes'));
    }

    public function edit($id)
    {
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();

        $product = Product::with('color', 'size', 'image', 'discount')->where('id', $id)->first();

        return view('back.product.edit', compact('product', 'categories', 'subcategories',
                                                                'childcategories', 'suppliers', 'brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'supplierprice' => 'required',
            'price' => 'required',
            'brand_id' => 'required',
            'supplier_id' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'child_category' => 'required',
            'pcode' => 'required',
        ]);

        $request['created_by'] = Auth::guard('admin')->user()->firstName;

        $id = Product::create($request->except('_token'));

        if ($request->color != '' && sizeof($request->color) >= 1) {
            for ($i = 0; $i < sizeof($request->color); $i++) {
                ProductColor::insert(['product_id' => $id->id, 'color' => $request->color[$i]]);
            }
        }
        if ($request->size != '' && sizeof($request->size) >= 1) {
            for ($i = 0; $i < sizeof($request->size); $i++) {
                ProductSize::insert(['product_id' => $id->id, 'size' => $request->size[$i]]);
            }
        }
        if ($request->hasFile('images')) {
            $destinationPath = "public/image/product-images";
            for ($i = 0; $i < sizeof($request->images); $i++) {
                ProductImage::insert(['product_id' => $id->id, 'image' => ManageImage::insertImage($destinationPath, $request->images[$i])]);
            }
        }

        return redirect()->back()->with('success', 'Record Added Successfully.');
    }

    public function update(Request $request, $id)
    {
        Product::where('id', $id)->update($request->except('_token', '_method', 'images', 'color', 'size', 'specification', 'weight', 'discount'));
        if ($request->color != '' && sizeof($request->color) >= 1) {
            ProductColor::where('product_id', $id)->delete();
            for ($i = 0; $i < sizeof($request->color); $i++) {
                DB::table('product_colors')->insert(['product_id' => $id, 'color' => $request->color[$i]]);
            }
        }
        if ($request->size != '' && sizeof($request->size) >= 1) {
            ProductSize::where('product_id', $id)->delete();
            for ($i = 0; $i < sizeof($request->size); $i++) {
                DB::table('product_sizes')->insert(['product_id' => $id, 'size' => $request->size[$i]]);
            }
        }
        if ($request->hasFile('images')) {
            $existingImage = ProductImage::select('image')->where('product_id', $id)->get();
            for ($x = 0; $x < sizeof($existingImage); $x++) {
                if (file_exists('public/image/product-images/' . $existingImage[$x]['image'])) {
                    unlink('public/image/product-images/' . $existingImage[$x]['image']);
                }
            }
        }

        if ($request->discount != '') {
            $exist = Discount::where('product_id', $id)->first();
            if ($exist) {
                Discount::where('product_id', $id)->update(['product_id' => $id, 'amount' => $request->discount]);
            } else {
                Discount::create(['product_id' => $id, 'amount' => $request->discount]);
            }

        }

        return redirect()->back()->with('success', 'Product Updated.');
    }

    public function destroy(Request $request, $id)
    {
        $product = Product::find($id);

        for ($i = 0; $i < sizeof($product->image); $i++) {
            if (file_exists('public/image/product-images/' . $product->image[$i]->image)) {
                unlink('public/image/product-images/' . $product->image[$i]->image);
            }
        }

        $product->delete();

        return redirect()->back()->with('success', 'Data Removed.');
    }

    public function imageUpdate($id)
    {
        $image = ProductImage::where('id', $id)->first();
    }

    public function supplierwisesearch($id)
    {
        $products = Product::with( 'size', 'color')->where('supplier_id', $id)->paginate(20);
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();

        return view('back.product.index', compact('products', 'suppliers', 'brands', 'categories', 'subcategories', 'childcategories'));
    }

    public function brandwisesearch($id)
    {
        $products = Product::with('size', 'color')->where('brand_id', $id)->paginate(20);
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();

        return view('back.product.index', compact('products', 'suppliers', 'brands', 'categories', 'subcategories', 'childcategories'));
    }

    public function categorywisesearch($id)
    {
        $products = Product::with( 'size', 'color')->where('category_id', $id)->paginate(20);
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();

        return view('back.product.index', compact('products', 'suppliers', 'brands', 'categories', 'subcategories', 'childcategories'));
    }

    public function typewisesearch($id)
    {
        $products = Product::with( 'size', 'color')->where('child_category', $id)->paginate(20);
        $suppliers = $this->getSuppliers();
        $brands = $this->getBrands();
        $categories = $this->getCategories();
        $subcategories = $this->getSubCategories();
        $childcategories = $this->getChildCategories();

        return view('back.product.index', compact('products', 'suppliers', 'brands', 'categories', 'subcategories', 'childcategories'));
    }

    public function productsalesdata()
    {
        $productsalesata = DB::table('order_products')
            ->leftJoin('products', 'products.id', 'order_products.product_id')
            ->select('title', DB::raw('count(product_id) as totalsale'))
            ->groupBy('product_id')
            ->get();

        return view('back.product.products_sales', compact('productsalesata'));
    }

    public function allsalesData()
    {
        $products = DB::table('orders')
            ->rightJoin('order_products', 'orders.id', 'order_products.order_id')
            ->rightJoin('products', 'products.id', 'order_products.product_id')
            ->select('code', 'title', 'order_products.created_at', 'price', 'qty', 'supplierprice', 'total')
            ->where('orders.cycle', 'success')
            ->get();

        return view('back.product.all_product_sales', compact('products'));
    }

    public function datewiseAllsalesData(Request $request)
    {
        $fromdate = $request->from;
        $todate = $request->to;
        $from = $fromdate . ' ' . '00:00:00';
        $to = $todate . ' ' . '23:59:59';
        $products = DB::table('orders')
            ->rightJoin('order_products', 'orders.id', 'order_products.order_id')
            ->rightJoin('products', 'products.id', 'order_products.product_id')
            ->select('code', 'title', 'order_products.created_at', 'price', 'supplierprice', 'total')
            ->where('orders.cycle', 'success')
            ->whereBetween('order_products.created_at', array($from, $to))
            ->get();

        return view('back.product.all_product_sales', compact('products'));
    }

    public function todaysSale()
    {
        $products = DB::table('orders')
            ->rightJoin('order_products', 'orders.id', 'order_products.order_id')
            ->rightJoin('products', 'products.id', 'order_products.product_id')
            ->select('code', 'title', 'order_products.created_at', 'price', 'supplierprice')
            ->where('orders.cycle', 'success')
            ->where('order_products.created_at', Carbon::now())
            ->get();

        return view('back.product.today_sales', compact('products'));
    }

    public function categoryWiseSale()
    {
        $productsaledata = DB::table('order_products')
            ->leftJoin('products', 'products.id', 'order_products.product_id')
            ->leftJoin('categories', 'categories.id', 'products.category_id')
            ->select('category', 'category_id', DB::raw('count(product_id) as totalsale'))
            ->groupBy('category_id')
            ->orderBy('totalsale', 'desc')
            ->get();

        return view('back.product.categorywise-sale', compact('productsaledata'));
    }

    public function supplierWiseSale()
    {
        $productsaledata = DB::table('order_products')
            ->leftJoin('products', 'products.id', 'order_products.product_id')
            ->leftJoin('suppliers', 'suppliers.id', 'products.supplier_id')
            ->select('name', DB::raw('count(product_id) as totalsale'))
            ->groupBy('supplier_id')
            ->orderBy('totalsale', 'desc')
            ->get();

        return view('back.product.supplerwise-sale', compact('productsaledata'));
    }


    public function getBrands()
    {
        return Brand::select('id', 'name')->get();
    }

    public function getSuppliers()
    {
        return Supplier::select('id', 'name')->get();
    }

    public function getCategories()
    {
        return Category::select('id', 'category')->get();
    }

    public function getSubCategories()
    {
        return Subcategory::select('id', 'subcategory')->get();
    }

    public function getChildCategories()
    {
        return Childcategory::select('id', 'childcategory')->get();
    }


}
