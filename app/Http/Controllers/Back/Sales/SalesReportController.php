<?php

namespace App\Http\Controllers\Back\Sales;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SalesReportController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {

       $orders= DB::table('orders')
            ->rightJoin('order_products','orders.id','order_products.order_id')
            ->rightJoin('products','products.id','order_products.product_id')
            ->select(DB::raw('total,MONTHNAME(orders.created_at) as month,sum(price*qty) as totalprice,sum(supplierprice*qty) as totalsupplierprice'))
            ->groupBy('month')
            ->where('cycle','success')
            ->orderBy('month','desc')
            ->get();
      $yearlyorders= DB::table('orders')
            ->select(DB::raw('sum(total) as totalsales,YEAR(orders.created_at) as year'))
            ->groupBy('year')
            ->where('cycle','success')
            ->orderBy('year','desc')
            ->get();

        return view('back.salesreport.sales',compact('orders','yearlyorders'));
    }

    public function productSalseReport(Request $request)
    {
        $d=DB::table('order_products')
            ->leftJoin('orders','orders.id','order_products.order_id')
            ->leftJoin('products','products.id','order_products.product_id')
            ->rightJoin('suppliers','suppliers.id','products.supplier_id')
            ->select('suppliers.name',DB::raw('count(order_products.product_id) as total'))
            ->groupBy('products.supplier_id')
            ->where('cycle','success')
            ->get();

        $monthlySale=DB::table('order_products')
            ->leftJoin('products','products.id','order_products.product_id')
            ->select(DB::raw('count(order_products.product_id) as total,
            MONTHNAME(order_products.created_at) as month,YEAR(order_products.created_at) as year'))
            ->groupBy('month','year')
            ->orderBy('order_products.created_at','asc')
            ->get();

        $totalCategoryWiseSale=DB::table('products')
            ->leftJoin('categories','categories.id','products.category_id')
            ->rightJoin('order_products','order_products.product_id','products.id')
            ->select('category',DB::raw('count(order_products.product_id) as total'))
//            ->where('proCycle','success')
            ->groupBy('products.category_id')
            ->get();
        return [$d,$monthlySale,$totalCategoryWiseSale];
    }
}
