@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Delivery Payment Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form action="{{route('makepyament')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" value="{{$payments->id}}" name="delivery_id" required>
                    <input type="hidden" value="{{$payments->month}}" name="month" required>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="payable">Payable</label>
                                <input type="text" class="form-control" id="payable" name="payable" value="{{ $payments->total }}" readonly>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="invoice">Payment Track ID</label>
                                <input type="text" class="form-control" id="invoice" name="invoice" required >
                            </div>
                        </div>
                        @if(is_null($paymentHistory))
                        <div class="col-xs-3">
                            <div class="form-group">
                                <label for="paid">Payment Amount</label>
                                <input type="text" class="form-control" id="paid" name="paid" required>
                            </div>
                        </div>
                        @else
                            @if($paymentHistory->totalpaid==$payments->total)
                                <div class="col-xs-3">
                                    <label for="name">All Paid</label>

                                </div>
                            @else
                                <div class="col-xs-3">
                                    @if( $paymentHistory->totalpaid==$payments->total)
                                        <div class="form-group">
                                            <label for="name">Payment Amount</label>
                                            <input type="text" class="form-control" id="paid" name="paid" value="{{ $paymentHistory->totalpaid }}" disabled="disabled">
                                        </div>
                                    @else
                                        <div class="form-group">
                                            <label for="name">Payment Amount</label>
                                            <input type="text" class="form-control" id="paid" name="paid" value="{{$payments->total- $paymentHistory->totalpaid }}" required>
                                        </div>
                                    @endif
                                </div>
                            @endif
                        @endif
                        @if(!is_null($paymentHistory)&& $paymentHistory->totalpaid==$payments->total)
                            Payment Complete
                        @else
                            <div class="col-md-3 col-sm-3">
                                <input style="margin-top: 25px;" type="submit" class="btn btn-primary" value="Make Payment">
                            </div>
                        @endif
                    </div>

                </form>
            </div>
            <!-- /.box-body -->
        </div>

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">All Delivery Payment Details</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                @if(count($completePayment)>=1)
                    <table class="table table-bordered table-striped ">
                        <thead>
                        <tr>
                            <th>Total Paid</th>
                            <th>Payment Track Code</th>
                            <th>Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php $i = 1 @endphp
                        @foreach($completePayment as $payment)
                            <tr>
                                <td>{{ $payment->paid }}</td>
                                <td>{{ $payment->invoice }}</td>
                                <td>{{ $payment->created_at }}</td>
                            </tr>
                            @php $i++ @endphp
                        @endforeach
                        </tbody>
                    </table>
                @else
                    No Payment Record Found.
                @endif
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
            $("#supplierform").attr('action',  document.location.origin+'/admin/delivery/payment/'+$(this).val()+'');
            this.form.submit();
        })
    </script>
@endsection
