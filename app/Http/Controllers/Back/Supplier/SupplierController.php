<?php

namespace App\Http\Controllers\Back\Supplier;

use App\Product;
use App\Supplier;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $suppliers = Supplier::all();
        return view('back.supplier.index', compact('suppliers'));
    }


    public function create()
    {
        return view('back.supplier.create');
    }


    public function store(Request $request)
    {
        Supplier::create($request->except('_token'));
        return redirect()->back()->with('success', 'Category Added.');
    }


    public function show($id)
    {
        $supplier = Supplier::find($id);
        $products = Product::with('color', 'size', 'color')->where('supplier_id', $id)->paginate(20);
        $totalProduct = Product::where('supplier_id', $id)->count();
        return view('back.supplier.show', compact('supplier', 'products', 'totalProduct'));
    }


    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('back.supplier.edit', compact('supplier'));
    }


    public function update(Request $request, $id)
    {
        Supplier::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }


    public function destroy($id)
    {
        Supplier::find($id)->delete();
        return redirect(route('supplierindex'))->with('success', 'Record Successfully Deleted ');
    }

    public function payment()
    {
        $suppliers = Supplier::select('name', 'id')->get();
        $supplierpayments = DB::table('supplier_payment')
            ->leftJoin('suppliers', 'suppliers.id', 'supplier_payment.supplier_id')
            ->select('name', 'suppliers.id as id', DB::raw('sum(payable) as payable,sum(paid) as paid'))
            ->groupBy('supplier_id')
            //->groupBy('month')
            ->get();
        return view('back.supplier.payment', compact('supplierpayments', 'suppliers'));
    }

    public function datewiseSupplierPayment(Request $request)
    {
        $suppliers = Supplier::select('name', 'id')->get();
        $fromdate = $request->from;
        $todate = $request->to;
        $supplierpayments = DB::table('supplier_payment')
            ->leftJoin('suppliers', 'suppliers.id', 'supplier_payment.supplier_id')
            ->select('name', 'suppliers.id as id', DB::raw('sum(payable) as payable,sum(paid) as paid'))
            ->groupBy('supplier_id')
            ->whereBetween('date', array($fromdate, $todate))
            //->groupBy('month')
            ->get();
        return view('back.supplier.payment', compact('supplierpayments', 'suppliers'));
    }

    public function supplierwisepayment($id)
    {
        $suppliers = Supplier::select('name', 'id')->get();
        $supplierpayments = DB::table('supplier_payment')
            ->leftJoin('suppliers', 'suppliers.id', 'supplier_payment.supplier_id')
            ->select('name', 'suppliers.id as id', DB::raw('sum(payable) as payable,sum(paid) as paid'))
            ->groupBy('supplier_id')
            ->where('supplier_id', $id)
            ->get();
        return view('back.supplier.payment', compact('supplierpayments', 'suppliers'));
    }

    public function paymentdetails($id)
    {
        $supplierpayment = DB::table('suppliers')
            ->where('id', $id)
            ->select('name')
            ->first();

        $completePayment = DB::table('supplier_payment')
            ->select('payable', 'id', 'supplier_id', 'paid', 'date', 'order_id')
            ->whereColumn('payable', '!=', 'paid')
            ->where('supplier_id', $id)
            ->get();
        return view('back.supplier.comlpetepayment', compact('supplierpayment', 'completePayment'));
    }

    public function storepayment(Request $request)
    {
        $paid = DB::table('supplier_payment')
            ->select('payable', 'paid')
            ->where('supplier_id', $request->supplier_id)
            ->where('id', $request->rowid)
            ->first();
        if ($paid->paid + $request->paid > $paid->payable || $request->paid <= 0) {
            return redirect()->back()->with('error', 'Invalid Data.');
        } else {
            DB::table('supplier_payment')
                ->where('id', $request->rowid)
                ->where('supplier_id', $request->supplier_id)
                ->update(['paid' => $request->paid + $paid->paid, 'date' => Carbon::now()->format('Y-m-d')]);
            return redirect()->back()->with('success', 'Data Recorded..');
        }
    }
}
