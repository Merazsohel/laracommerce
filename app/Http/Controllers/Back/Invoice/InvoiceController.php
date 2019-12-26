<?php

namespace App\Http\Controllers\Back\Invoice;

use App\Order;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;


class InvoiceController extends Controller
{

    public function invoice($id)
    {
        $order = Order::with('customer', 'address')->where('id', $id)->first();

        $pdf = PDF::loadView('back.order.invoice', compact('order'));

        return $pdf->stream('invoice.pdf');
    }
}
