<?php

namespace App\Http\Controllers\Back\Invoice;

use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class InvoiceController extends Controller
{

    public function invoice($id)
    {
        $order = Order::with('customer')->where('id', $id)->first();
        $address = DB::table('settings')->select('address')->first();

        $pdf = PDF::loadView('back.order.invoice', compact('order','address'));

        return $pdf->stream('invoice.pdf');
    }
}
