<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{


    public function placeOrder(Request $request)
    {
        $request['delivery_charge'] = 50;
        $request['address'] = Session::get('address');
        $request['total'] = floatval(str_replace(',', '', Cart::subtotal()));
        $request['customer_id'] = session('customer_id');
        $request['code'] = mt_rand(100000000, 999999999);

        if ($order = Order::create($request->all())) {
            foreach (Cart::content() as $cart) {
                DB::table('order_products')->insert(['order_id' => $order->id, 'product_id' => $cart->id, 'color' => $cart->options->color, 'size' => $cart->options->size, 'qty' => $cart->qty, 'attr' => $cart->options->attr, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
        }
        $data["email_address"] = Session::get('email_address');
        $data["customer_name"] = Session::get('customer_name');
        $data["subject"] = 'Thanks For Purchase';
        $pdf = PDF::loadView('frontend.mail.mail', $data);


        Mail::send('frontend.mail.mail', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email_address"], $data["customer_name"])
                ->subject($data["subject"])
                ->attachData($pdf->output(), "invoice.pdf");
        });

        Cart::destroy();

        return redirect()->to('shipping');
        }
    }

}
