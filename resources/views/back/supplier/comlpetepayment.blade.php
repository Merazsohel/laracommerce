@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Payment Details of {{$supplierpayment->name}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>Payable</th>
                            <th>Paid</th>
                            <th>Products</th>
                            <th>Remain</th>
                            <th>Last Payment</th>
                            <th>Payment Option</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                        @foreach($completePayment as $supplierpayment)
                            <tr>
                                <td>{{ $supplierpayment->payable }}</td>
                                <td>{{ $supplierpayment->paid }}</td>
                                <td>
                                    @php
                                      $products=  \Illuminate\Support\Facades\DB::table('orders')
                                    ->where('order_id',$supplierpayment->order_id)
                                    ->where('supplier_id',$supplierpayment->supplier_id)
                                    ->rightJoin('order_products','orders.id','order_products.order_id')
                                    ->leftJoin('products','products.id','order_products.product_id')
                                    ->groupBy('supplier_id')
                                    ->select('title','supplierprice','qty')
                                    ->get();
                                    @endphp
                                    @foreach($products as $product)
                                        {{"Product - ".$product->title ." | Price - ".$product->supplierprice ." * ". $product->qty}}
                                    @endforeach
                                </td>
                                <td>
                                    @if($supplierpayment->payable - $supplierpayment->paid==0 )
                                        <span class="label label-success"><i class="fa fa-check"></i> All Paid </span>
                                    @else
                                        <span class="label label-warning">{{$supplierpayment->payable - $supplierpayment->paid}} /-</span>
                                    @endif
                                </td>
                                <td>{{$supplierpayment->date}}</td>
                                <td>
                                    <a href="" data-toggle="modal" data-id="{{$supplierpayment->id}}" data-supplierid="{{$supplierpayment->supplier_id}}" data-paid="{{$supplierpayment->paid}}" data-payable="{{$supplierpayment->payable}}"  data-target="#modal" class="btn btn-success paymentbutton">Make Payment</a>
                                </td>
                            </tr>
                            @php $i++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->

    <div class="example-modal">
        <div class="modal modal-default fade"  id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Success Modal</h4>
                    </div>
                    <form action="{{route('payment')}}" method="post">
                        {{csrf_field()}}
                        <div class="modal-body">
                            <div class="box-body">
                                <div class="row">
                                    <input type="hidden" id="supplierid" name="supplier_id">
                                    <input type="hidden" id="rowid" name="rowid">
                                    <div class="col-xs-6">
                                        <label for="">Total Paid</label>
                                        <input type="text" id="totalpaid" class="form-control" disabled="" placeholder="Payable">
                                    </div>
                                    <div class="col-xs-6">
                                        <label for="">Payable Amount</label>
                                        <input type="text" id="payable" class="form-control" name="paid" placeholder="Amount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success submitpayment">Save changes</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
@endsection
@section('script')
    <script>
        $(document).on('click','.paymentbutton',function () {
            var payable=($(this).attr('data-payable'));
            var paid=($(this).attr('data-paid'));
            $('#totalpaid').val(paid);
            $('#payable').val(payable-paid);
            $('#supplierid').val(($(this).attr('data-supplierid')));
            $('#rowid').val(($(this).attr('data-id')));

            if(payable-paid==0)
            {
                $('.submitpayment').attr("disabled", "disabled");
            }
        })
    </script>
@endsection