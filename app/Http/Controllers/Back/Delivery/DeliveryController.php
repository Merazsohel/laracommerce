<?php

namespace App\Http\Controllers\Back\Delivery;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Delivery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DeliveryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $deliveries = Delivery::all();
        return view('back.delivery.index', compact('deliveries'));
    }


    public function create()
    {
        return view('back.delivery.create');
    }


    public function store(Request $request)
    {
        Delivery::create($request->except('_token'));
        return redirect()->back()->with('success', 'Information Added.');
    }


    public function edit($id)
    {
        $delivery = Delivery::find($id);
        return view('back.delivery.edit', compact('delivery'));
    }


    public function update(Request $request, $id)
    {
        Delivery::where('id', $id)->update($request->except('_token', '_method'));
        return redirect()->back()->with('success', 'Record Successfully Updated.');
    }


    public function destroy($id)
    {
        Delivery::find($id)->delete();
        return redirect(route('deliveryindex'))->with('success', 'Record Successfully Inserted ');
    }

    public function deliverypayment()
    {
        $deliveryCompanies = Delivery::select('name', 'id')->get();

        $payments = DB::table('orderdeliveries')
            ->rightJoin('deliveries', 'deliveries.id', 'orderdeliveries.delivery_id')
            ->select('deliveries.id as id', 'name', DB::raw('sum(delivery_charge) as total,
            MONTHNAME(orderdeliveries.created_at) as month,YEAR(orderdeliveries.created_at) as year'))
            ->groupBy('month')
            ->groupBy('year')
            ->groupBy('delivery_id')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'asc')
            ->get();

        return view('back.delivery.delivery_payment', compact('deliveryCompanies', 'payments'));
    }

    public function deliveryPaymentById($id)
    {
        $deliveryCompanies = Delivery::select('name', 'id')->get();

        $payments = DB::table('orderdeliveries')
            ->rightJoin('deliveries', 'deliveries.id', 'orderdeliveries.delivery_id')
            ->select('deliveries.id as id', 'name', DB::raw('sum(delivery_charge) as total,
            MONTHNAME(orderdeliveries.created_at) as month,YEAR(orderdeliveries.created_at) as year'))
            ->where('delivery_id', $id)
            ->groupBy('month')
            ->groupBy('year')
            ->groupBy('delivery_id')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'asc')
            ->get();

        return view('back.delivery.delivery_payment', compact('deliveryCompanies', 'payments'));
    }

    public function deliverypaymentdetails($month, $id)
    {
        $payments = DB::table('orderdeliveries')
            ->where('delivery_id', $id)
            ->rightJoin('deliveries', 'deliveries.id', 'orderdeliveries.delivery_id')
            ->select('name', 'orderdeliveries.delivery_id as id', DB::raw('sum(delivery_charge) as total,
            MONTHNAME(orderdeliveries.created_at) as month,YEAR(orderdeliveries.created_at) as year'))
            ->groupBy('month')
            ->groupBy('year')
            ->groupBy('delivery_id')
            ->orderBy('year', 'desc')
            ->orderBy('month', 'asc')
            ->first();

        $paymentHistory = DB::table('delivery_payment')
            ->where('delivery_id', $id)
            ->where('month', $month)
            ->select(DB::raw('sum(paid) as totalpaid'))
            ->groupBy('month')
            ->first();

        $completePayment = DB::table('delivery_payment')
            ->where('delivery_id', $id)
            ->where('month', $month)
            ->select('payable', 'paid', 'invoice', 'created_at')
            ->get();

        return view('back.delivery.makepayment', compact('payments', 'completePayment', 'paymentHistory'));
    }

    public function makepyament(Request $request)
    {

        $completePayment = DB::table('delivery_payment')
            ->where('delivery_id', $request->delivery_id)
            ->where('month', $request->month)
            ->select(DB::raw('sum(paid) as totalpaid'))
            ->groupBy('month')
            ->groupBy('delivery_id')
            ->first();

        if (!is_null($completePayment)) {

            if ($request->paid > $completePayment->totalpaid || $request->paid <= 1) {
                return redirect()->back();
            } else {
                if ($request->payable - ($request->paid + $completePayment->totalpaid) == 0) {
                    $remain = 0;
                } else {
                    $remain = $request->payable - ($request->paid + $completePayment->totalpaid);
                }
                DB::table('delivery_payment')->insert(['delivery_id' => $request->delivery_id,
                    'payable' => $request->payable,
                    'paid' => $request->paid,
                    'remain' => $remain,
                    'month' => $request->month,
                    'year' => Carbon::now()->format('Y'),
                    'invoice' => $request->invoice,
                    'paid_by' => Auth::guard('admin')->user()->firstName,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                return redirect()->back()->with('success', 'Data Recorded Successfully.');
            }
        } else {
            if ($request->paid >= $request->payable || $request->paid > $request->payable || $request->paid <= 1) {
                return redirect()->back();
            } else {
                DB::table('delivery_payment')->insert(['delivery_id' => $request->delivery_id,
                    'payable' => $request->payable,
                    'paid' => $request->paid,
                    'remain' => $request->payable - $request->paid,
                    'month' => $request->month,
                    'year' => Carbon::now()->format('Y'),
                    'invoice' => $request->invoice,
                    'paid_by' => Auth::guard('admin')->user()->firstName,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ]);
                return redirect()->back()->with('success', 'Data Recorded Successfully.');
            }
        }
    }
}
