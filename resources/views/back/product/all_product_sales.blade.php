@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form role="form" action="{{ route('datewiseAllsalesData') }}" method="get">
                            <div class="row">
                                <div class="col-md-5 col-sm-5">
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

                                <div class="col-md-5 col-sm-5">
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
            <!-- /.box-header -->
            <div class="box-body">
                <h4>All Sales Records</h4>
                <table class="table table-bordered table-striped ">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Order No.</th>
                        <th>Product</th>
                        <th>Date</th>
                        <th>MRP</th>
                        <th>TP</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i = 1 @endphp
                    @foreach($products as $product)
                        @php $total[]=($product->price* $product->qty) @endphp
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->code}}</td>
                            <td>{{$product->title}}</td>
                            <td>{{$product->created_at}}</td>
                            <td>{{$product->price}} * {{$product->qty}}</td>
                            <td>{{$product->supplierprice}} /-</td>
                        </tr>
                        @php $i++ @endphp
                    @endforeach
                    </tbody>
                </table>
                <div class="pull-right">
                    <span class="label label-success" style="font-size: 15px">Total Amount Of Sale : @if(!empty(($total))) {{array_sum($total)}} @else 0 @endif /-</span>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
@endsection
