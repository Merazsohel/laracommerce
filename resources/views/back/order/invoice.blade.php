<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice of {{$order->customer->customer_name}}</title>
    <link rel="stylesheet" href="{{asset('public/back/dist/css/pdf.css')}}">
</head>

<body>
    <div style="max-width: 592px; margin: auto">
        <div class="row">
            <div class="col-xs-12">
                <div class="pull-left">
                    
                    <p>{{$address->address}}</p>
                </div>
    
                <div class="pull-right">
                    <h1>INVOICE</h1>
                    <h4 class="invoice-number">No. # {{$order->code}}</h4>
                </div>
            </div>
    
            <div class="clearfix"></div>
            <hr/>
            <div class="row">
                <div class="col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><strong>To: </strong> </h4>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>Name :</td>
                                    <td>{{$order->customer->customer_name}}</td>
                                </tr>
                                <tr>
                                    <td>Address :</td>
                                    <td>{{$order->address}}</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number</td>
                                    <td>{{$order->customer->mobile_number}}</td>
                                </tr>
                            </table>
                            <br />
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th style="width: 50px">Qty</th>
                                    <th style="width: 50px">Price</th>
                                    <th style="width: 80px">Sub Total</th>
                                </tr>
                                </thead>
                                <tbody>
                               
                                    @php $total = array() ; @endphp
                            @foreach($order->product as $orderItem)
                                <tr>
                                    <td>{{  $orderItem->title }}</td>
                                    <td>{{  $orderItem->pivot->qty }}</td>
                                    <td>{{  $orderItem->price }}/-</td>
                                    <td class="text-right">{{  $orderItem->pivot->qty*$orderItem->price }} /-</td>
                                </tr>
                                @php  $total[] =  $orderItem->pivot->qty*$orderItem->price;  @endphp
                            @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-right">Neat Total :</th>
                                        <th class="text-right">{{ ($order->total) }} /-</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="text-right">Delivery Charge :</th>
                                        <th class="text-right"> 60/-</th>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="text-right">Grand Total</th>
                                        <th class="text-right" >{{ $order->total +60 }}/-</th>
                                    </tr>
                                </tfoot>
                            </table>
    
                            <p>Thank you for being with us.</p>
                            <br>
                            <br>
                            <hr>
                            <table class="table">
                                <tr>
                                    <td><p>Customer Signature</p></td>
                                    <td><p class="text-center">Delivery Signature</p></td>
                                    <td><p class="text-right">Author Signature</p></td>
                                </tr>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>