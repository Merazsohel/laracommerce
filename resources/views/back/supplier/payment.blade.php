@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    <div class="col-md-4 ">
                        <label>Select Suppliers</label>
                        <form name="supplierform" id="supplierform"  method="get">
                            <select class="form-control" id="supplier">
                                <option>Select Supplier</option>
                                @foreach($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                    <div class="col-md-8 ">
                        <form role="form" action="{{ route('datewiseSupplierPayment') }}" method="get">
                            <div class="row">
                                <div class="col-md-4 col-sm-5">
                                    <!-- Date -->
                                    <div class="form-group">
                                        <label>From:</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="from" class="form-control pull-right datepicker" />
                                        </div>
                                        <!-- /.input group -->
                                        <span class="help-block">Date Format : Year-Month-Day</span>
                                    </div>
                                    <!-- /.form group -->
                                </div>

                                <div class="col-md-4 col-sm-5">
                                    <!-- Date -->
                                    <div class="form-group">
                                        <label>To:</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="to" class="form-control pull-right datepicker" />
                                        </div>
                                        <!-- /.input group -->
                                        <span class="help-block">Date Format : Year-Month-Day</span>
                                    </div>
                                    <!-- /.form group -->
                                </div>
                                <div class="col-md-2 col-sm-2">
                                    <input style="margin-top: 25px;" type="submit" class="btn btn-primary" value="Search">
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Suppliers Payments Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped ">
                    <thead>
                        <tr>
                            <th>Supplier</th>
                            <th>Total Amount</th>
                            <th>Total Paid</th>
                            <th>Total Due</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach($supplierpayments as $supplierpayment)
                        <tr>
                            <td>{{ $supplierpayment->name }}</td>
                            <td>{{ $supplierpayment->payable }}</td>
                            <td>{{ $supplierpayment->paid }}</td>
                            <td>@if ($supplierpayment->payable - $supplierpayment->paid==0) <span class="label label-success">All paid</span> @else  {{$supplierpayment->payable - $supplierpayment->paid}} @endif</td>
                            <td>
                                <a href="{{route('paymentdetails',$supplierpayment->id)}}"> <i class="fa fa-eye"></i> Payment Details</a>
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
@endsection

@section('script')
    <script>
        $('#supplier').on('change',function () {
            $("#supplierform").attr('action',  document.location.origin+'/admin/supplier/payment/'+$(this).val()+'');
            this.form.submit();
        })
    </script>
@endsection
