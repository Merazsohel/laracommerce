@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Sales Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Monthly Sales Summery</h4>
                        <table class="table table-bordered table-striped ">
                            <thead>
                                <tr>
                                    <th>Order No</th>
                                    <th>Month</th>
                                    <th>Profit</th>
                                    <th>Total Sales</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1 @endphp
                                @foreach($orders as $order)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$order->month}}</td>
                                        <td>{{$order->totalprice-$order->totalsupplierprice}} /-</td>
                                        <td>{{$order->totalprice}} /-</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <h4>Yearly Sales Summery</h4>
                        <table class="table table-bordered table-striped ">
                            <thead>
                            <tr>
                                <th>Order No</th>
                                <th>Year</th>
                                <th>Total Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php $i = 1 @endphp
                            @foreach($yearlyorders as $order)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{$order->year}}</td>
                                    <td>{{$order->totalsales}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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

@endsection