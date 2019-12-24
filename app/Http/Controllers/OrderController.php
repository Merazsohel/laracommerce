<?php

namespace App\Http\Controllers;

use App\Order;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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

        $payment_type = $request->payment_type;

        if ($payment_type == 'ssl_commerz') {
            $this->ssl_payment();
        }

        if ($payment_type == 'cash_on_delivery'){

            if ($order = Order::create($request->all())) {
                foreach (Cart::content() as $cart) {
                    DB::table('order_products')->insert(['order_id' => $order->id, 'product_id' => $cart->id, 'color' => $cart->options->color, 'size' => $cart->options->size, 'qty' => $cart->qty, 'attr' => $cart->options->attr, 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
                }
                $data["email_address"] = Session::get('email_address');
                $data["customer_name"] = Session::get('customer_name');
                $data["subject"] = 'Thanks For Purchase';

                Mail::send('frontend.mail.mail', $data, function ($message) use ($data) {
                    $message->to($data["email_address"], $data["customer_name"])
                        ->subject($data["subject"]);
                });


                Cart::destroy();

                return redirect()->to('shipping');
            }
        }

    }



    private function ssl_payment()
    {
        define("STORE_ID", "testbox");
        define("STORE_PASSWORD", "qwerty");
        define("SSLCZ_REDIRECT_URL", "https://sandbox.sslcommerz.com/gwprocess/v3/api.php");
        define("SSLCZ_VALIDATION_API", "https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php");

        $post_data = array();

        $post_data['store_id'] = STORE_ID;

        $post_data['store_passwd'] = STORE_PASSWORD;

        $post_data['currency'] = 'BDT';

        $gtotal = Cart::total();

        $post_data['total_amount'] = str_replace(',', '', $gtotal);

        $_SESSION['SSLCZ_TRX_ID'] = $post_data['tran_id'] = "SSLCZ_TEST_" . uniqid();

        $post_data['success_url'] = "http://localhost/ecommerce/success-url";

        $post_data['fail_url'] = "http://localhost/ecommerce/fail-url";

        $post_data['cancel_url'] = "http://localhost/ecommerce/cancel-url";

        # CUSTOMER INFORMATION

        $_SESSION['CUS_HISTORY']['CUS_NAME'] = $post_data['cus_name'] = Session::get('customer_name');
        $_SESSION['CUS_HISTORY']['CUS_NAME2'] = $post_data['cus_name2'] = '';

        $_SESSION['CUS_HISTORY']['CUS_EMAIL'] = $post_data['cus_email'] = Session::get('email_address');

        $_SESSION['CUS_HISTORY']['CUS_ADD'] = $post_data['cus_add1'] = Session::get('address');
        $_SESSION['CUS_HISTORY']['CUS_COUNTRY'] = $post_data['cus_country'] ='Bangladesh';


        $handle = curl_init();

        curl_setopt($handle, CURLOPT_URL, SSLCZ_REDIRECT_URL);

        curl_setopt($handle, CURLOPT_POST, 1);

        curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);

        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

        /* ---------- **Below two lines only for Localhost ----------- */
        curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, 0);


        $content = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);


        if ($code == 200 && !(curl_errno($handle))) {

            curl_close($handle);

            $sslcommerzResponse = $content;

            # PARSE THE JSON RESPONSE

            $sslcz = json_decode($sslcommerzResponse, true);

            if (isset($sslcz['status']) && $sslcz['status'] == 'SUCCESS') {

                if (isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL'] != '') {

                    echo '<meta http-equiv="refresh" content="0; url=' . $sslcz['GatewayPageURL'] . '" />';

                    #header("Location: " . $sslcz['GatewayPageURL']);

                    exit;
                } else {

                    echo "No redirect URL found!";
                }
            } else {

                echo "Invalid Credential!";
            }
        } else {

            curl_close($handle);

            echo "FAILED TO CONNECT WITH SSLCOMMERZ API";

            exit;
        }
    }

    public function success_url()
    {
        echo 'In Success';
    }

    public function fail_url()
    {
        echo 'Fail';
    }

    public function cancel_url()
    {
        echo 'Cancel';
    }


}
