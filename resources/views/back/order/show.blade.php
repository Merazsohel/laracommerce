@extends('back.layouts.master')

@section('content')
    <section class="content">
        <!-- Default box -->
        <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Order Show Title</h3>
        </div>
            <div class="box-body">
                <section class="invoice">
                        <!-- title row -->
                        <div class="row">
                            <div class="col-xs-12">
                            <h2 class="page-header">
                                <i class="fa fa-globe"></i> Meraz Shop
                                <small class="pull-right">Date: {{date('d-m-y')}}</small>
                                <small>
                                    @if($order->cycle=='new')
                                        <span class="label label-success">New</span>
                                    @elseif($order->cycle=='confirm')
                                        <span class="label label-warning">Order Confirmed</span>
                                    @elseif($order->cycle=='ondelivery')
                                        <span class="label label-warning">Order On Delivery</span>
                                    @elseif($order->cycle=='success')
                                        <span class="label label-info">Order Delivered</span>
                                    @elseif($order->cycle=='return')
                                        <span class="label label-danger">Order Returned</span>
                                    @endif
                                </small>

                            </h2>
                                <a href="{{url('invoice-create/'.$order->id,['download'=>'pdf'])}}" class="btn btn-primary pull-right" style="margin-right: 5px;">
                                    <i class="fa fa-download"></i> Generate Invoice
                                </a>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- info row -->
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                            From
                            <address>
                                <strong>Meraz Shop.</strong><br>
                                Merul Badda,<br>
                                Dhaka,<br>
                                Phone: 01629064868,<br>
                                Email: info@merazsohel.com
                            </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                            To
                            <address>
                                <strong>Name : {{$order->address->fname}} {{$order->address->lname}}</strong><br>
                                <strong>{{$order->address->address}}</strong><br>
                                Phone: {{$order->address->phone}}<br>
                                City: {{$order->address->city}}<br>
                            </address>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                            <b>Invoice #007612</b><br>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    
                        <!-- Table row -->
                        <div class="row">
                            <div class="col-xs-12 table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                        <th>Subtotal</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php $i=0; @endphp
                                    @foreach($order->product as $product)
                                        <tr>
                                            <td>{{$product->title}}</td>
                                            <td>{{$product->pivot->qty}}</td>
                                            <td>{{$product->price}}</td>
                                            <td>{{$product->price * $product->pivot->qty}}</td>
                                            <td>
                                                <form id="delete-form{{$i}}" action="{{route('orderproductdelete',$product->pivot->id)}}" method="POST" style="display: inline-block">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                                    <input type="hidden" id="order_id" name="order_id" value="{{$order->id}}">
                                                    <div class="btn-group">
                                                        <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete"> <i class="fa fa-remove"></i></a>
                                                    </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @php $i++; @endphp
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    
                        <div class="row">
                            <div class="col-xs-6 col-lg-offset-6">
                            <div class="table-responsive">
                                <table class="table">
                                <tbody>
                                <tr>
                                    <th style="width:50%">Subtotal:</th>
                                    <td>৳  {{$order->total}} /-</td>
                                </tr>
                                {{--<tr>--}}
                                    {{--<th>Tax (9.3%)</th>--}}
                                    {{--<td>$10.34</td>--}}
                                {{--</tr>--}}
                                <tr>
                                    <th>Shipping Charge:</th>
                                    <td>৳ 60 /-</td>
                                </tr>
                                <tr>
                                    <th>Grand Total:</th>
                                    <td>৳ {{$order->total+60}} /-</td>
                                </tr>
                                </tbody></table>
                            </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                        <!-- this row will not appear when printing -->
                        <div class="row no-print">
                            <div class="col-xs-12">
                            <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
                                <div id="ordercontrol">
                                    @if($order->cycle=='new')
                                        <button type="button" class="btn btn-success pull-right" data-id="{{$order->id}}" id="confirm"><i class="fa fa-credit-card"></i> Confirm Order
                                        </button>
                                    @elseif($order->cycle=='ondelivery')
                                        <button type="button" class="btn btn-warning pull-right" data-id="{{$order->id}}" id="cancelorder"><i class="fa fa-remove"></i> Return Order
                                        </button>
                                        <button type="button" class="btn btn-success pull-right" data-id="{{$order->id}}" id="ordersuccess"><i class="fa fa-check"></i> Order Complete
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                        </section>
            </div>
            <!-- /.box-body -->
        </div>
    <!-- /.box -->
    </section>
  <!-- /.content ishrat -->
@endsection
@section('script')
    <script>
        var id='';
        $('#confirm').on('click',function () {
             id =($(this).attr('data-id'));
            $.ajax({
                url:'{{route('getDeliveryCompany')}}',
                type:'post',
                success:function (res) {
                    //console.log(res);
                    var option='';
                    option+= "<div class='col-sm-6 pull-right'>" +
                        "<select class='form-control' id='deliverycompany' name='deliverycompany'>" +
                        "<option value=''>Select Company</option>";
                    for(var i=0;i<res.length;i++)
                    {
                        option+= "<option value='"+res[i].id+"'>"+res[i].name+"</option>";
                    }
                    option+= "</select>" +
                        "<button type='button' class='btn btn-success pull-right confirmdelivery' id='confirmdelivery'><i class='fa fa-credit-card'></i>"+
                        "Proceed To Delivery"+
                        "</button>"+
                        "</div>";
                    $('#ordercontrol').html(option);
                },
                error:function (res) {
                    alert(res.responseText)
                }
            })
        });

        $(document).on('click','.confirmdelivery',function (e) {
          e.preventDefault();
            var deliverycompany =$('#deliverycompany').val();
            var order_id=$('#order_id').val();
            $.ajax({
                url:'{{route('deliveryConfirm')}}',
                type:'post',
                data:{
                    'id':id,
                    'order_id':order_id,
                    'company_id':deliverycompany,
                    'type':'ondelivery'
                },
                success:function (res) {
                    window.location.reload();
                },
                error:function (res) {
                    alert(res.responseText)
                }
            })
        })

        $(document).on('click','#cancelorder',function (e) {
//            e.preventDefault();

            var order_id=$('#order_id').val();
            $.ajax({
                url:'{{route('deliveryConfirm')}}',
                type:'post',
                data:{
                    'id':id,
                    'order_id':order_id,
                    'type':'returnorder'
                },
                success:function (res) {
                    window.location.reload();
                },
                error:function (res) {
                    alert(res.responseText)
                }
            })
        })
        $(document).on('click','#ordersuccess',function (e) {
//            e.preventDefault();

            var order_id=$('#order_id').val();
            $.ajax({
                url:'{{route('deliveryConfirm')}}',
                type:'post',
                data:{
                    'order_id':order_id,
                    'type':'success'
                },
                success:function (res) {
                    //console.log(res);
                   window.location.reload();
                },
                error:function (res) {
                    alert(res.responseText)
                }
            })
        })
    </script>
@endsection
