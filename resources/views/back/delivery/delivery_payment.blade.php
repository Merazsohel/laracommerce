@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">

                    <div class="col-md-4 col-lg-offset-4 ">
                        <label>Search By Delivery Company</label>
                        <form name="supplierform" id="supplierform"  method="get">
                            <select class="form-control" id="supplier">
                                <option>Select Delivery Company</option>
                                @foreach($deliveryCompanies as $deliveryCompany)
                                    <option value="{{$deliveryCompany->id}}">{{$deliveryCompany->name}}</option>
                                @endforeach
                            </select>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Delivery Payment Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        <th>Company Name</th>
                        <th>Total Amount</th>
                        <th>Month</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach($payments as $payment)
                        <tr>
                            <td>{{ $payment->name }}</td>
                            <td>{{ $payment->total }}</td>
                            <td>{{ $payment->month }}</td>
                            <td> <a href="{{route('deliverypaymentdetails',[$payment->month,$payment->id])}}">Details</a>@if($payment->total!='' && $payment->total!='')@else No Delivery Yet. @endif</td>
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
            $("#supplierform").attr('action',  document.location.origin+'/ecommerce/admin/delivery/payment/'+$(this).val()+'');
            this.form.submit();
        })
    </script>
@endsection
