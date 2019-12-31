@extends('back.layouts.master')

@section('content')
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <form role="form" action="{{ route('ordersearch') }}" method="get">
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
                                        <span class="help-block">Date Format : Year-Month-Day</span>
                                    </div>
                                </div>
            
                                <div class="col-md-5 col-sm-5">

                                    <div class="form-group">
                                        <label>To:</label>
                                        <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="to" class="form-control pull-right datepicker" />
                                        </div>
                                        <span class="help-block">Date Format : Year-Month-Day</span>
                                    </div>
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
                <h3 class="box-title">All Orders</h3>
                <div class="box-tools pull-right">
                    <a href="{{route('orderstatus','new')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="" data-original-title="View All">
                        <i class="fa fa-eye"></i> New Orders
                    </a> <a href="{{route('orderstatus','confirm')}}" class="btn btn-info btn-xs" data-toggle="tooltip" title="" data-original-title="View New Orders">
                        <i class="fa fa-eye"></i> Confirmed Orders
                    </a> <a href="{{route('orderstatus','ondelivery')}}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="" data-original-title="View On-Delivery Orders">
                        <i class="fa fa-eye"></i> On Delivery
                    </a> <a href="{{route('orderstatus','success')}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="" data-original-title="View Complete Orders">
                        <i class="fa fa-eye"></i> Complete Orders
                    </a> <a href="{{route('orderstatus','return')}}"class="btn btn-danger btn-xs" data-toggle="tooltip" title="" data-original-title="View Return Orders">
                        <i class="fa fa-eye"></i> Return Orders
                    </a>
                </div>
            </div>
            <!-- /.box-header -->
              <div class="box-body">
                  <table class="table table-bordered table-striped " id="example1">
                      <thead>
                          <tr>
                              <th>ID</th>
                              <th>Date</th>
                              <th>Name</th>
                              <th>Mobile</th>
                              <th>Address</th>
                              <th>Payment</th>
                              <th>Total</th>
                              <th>Status</th>
                              <th>Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @php $i = 1 @endphp
                          @foreach($orders as $order)
                            <tr>
                                <td>{{$order->code}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->customer->customer_name}}</td>
                                <td>{{$order->customer->mobile_number}}</td>
                                <td>{{$order->address}}</td>
                                <td>{{$order->payment_type}}</td>
                                <td>{{$order->total}} /-</td>
                                <td>
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
                                </td>
                                <td>
                                    <form id="delete-form{{$i}}" action="{{route('orderdelete',$order->id)}}" method="POST" style="display: inline-block">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-success btn-flat btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> Action <span class="caret"></span></button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{{route('ordershow', $order->id)}}"> <i class="fa fa-eye"></i> Show</a></li>

                                                <li>
                                                    <a href="javaScript:void(0)" data-id="{{$i}}" class="btn-delete"> <i class="fa fa-trash"></i> Delete</a>
                                                </li>          
                                            </ul>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                           @php $i++ @endphp
                          @endforeach
                      </tbody>
                  </table>
              </div>

        </div>

    </section>

@endsection
