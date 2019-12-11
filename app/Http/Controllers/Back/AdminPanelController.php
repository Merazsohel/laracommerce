<?php

namespace App\Http\Controllers\Back;

use App\Admin;
use App\Brand;
use App\Customer;
use App\Order;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminPanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('role');
    }

    public function index()
    {
        $totalSuppliers=Supplier::count();
        $totalBrands=Brand::count();
        $totalProducts=Product::count();
        $totalAdmins=Admin::count();
        $totalCustomers=Customer::count();
        $newOrders=Order::where('cycle','new')->count();
        $completeOrders=Order::where('cycle','success')->count();

        // $supplierwise_sale=DB::table('order_products')
        //     ->leftJoin('products','products.id','order_products.product_id')
        //     ->rightJoin('suppliers','products.supplier_id','suppliers.id')
        //     ->select('suppliers.name as suppliername',DB::raw('sum(supplierprice) as total, MONTHNAME(order_products.created_at) as month'))
        //     ->groupBy('supplier_id','month')
        //     ->orderBy('month','desc')
        //     ->get();

//         $productwise_sale=DB::table('order_products')
//             ->leftJoin('products','products.id','order_products.product_id')
//             ->select('products.title',DB::raw('sum(supplierprice) as suppliertotal, MONTHNAME(order_products.created_at) as month'))
//             ->groupBy('order_products.product_id','month')
//             ->where('proCycle','success')
//             ->get();

        // $total_sale=DB::table('order_products')
        //     ->rightJoin('orders','order_products.order_id','orders.id')
        //     ->where('cycle','success')
        //     ->select(DB::raw('sum(total) as total, MONTHNAME(order_products.created_at) as month'))
        //     ->groupBy('month')
        //     ->get();

        return view('back.index',compact('totalSuppliers','totalBrands','totalProducts','totalAdmins','totalCustomers','newOrders','completeOrders'));
    }
}
