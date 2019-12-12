<?php

namespace App\Http\Controllers\Back\Invoice;

use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;


class InvoiceController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth:admin');
//    }
    public function invoice($id)
    {
        $order = Order::with('customer','address')->where('id', $id)->first();

       // return view('back.order.invoice', compact('order'));

        $pdf = PDF::loadView('back.order.invoice' , compact('order'));
    
        return $pdf->stream('invoice.pdf');
    }
}
