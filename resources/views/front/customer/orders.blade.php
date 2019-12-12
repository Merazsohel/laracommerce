@extends('front.layouts.master')
@section('title')
    <title>Order Details | westernhutt.com</title>
@endsection
@include('front.customer.sidebar')
@section('content')
    <main class="site-main blog-single">
        <div style="height:20px"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right">
                    <div class="main-content">
                        <div class="post-detail">
                            <div class="post-item">
                                <div class="post-item-info">
                                    <div class="post-content">
                                    @if(count($orders)>=1)
                                       <table class="table">
                                           <thead>
                                               <tr>
                                                   <th>Order NO.</th>
                                                   <th>Date</th>
                                                   <th>Total</th>
                                                   <th>Action</th>
                                               </tr>
                                           </thead>
                                           <tbody>
                                               @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>{{$order->total}} /-</td>
                                                        <td><a href="{{route('customerorderdetails',['details',$order->id])}}" class="btn-sm btn-info">Details</a></td>
                                                    </tr>
                                               @endforeach
                                           </tbody>
                                       </table>
                                        @else
                                            <h2>You have not ordered any product yet.</h2>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4">
                    @yield('sidebar')
                </div>
            </div>
        </div>
    </main>
@endsection
@section('script')
    <script>

    </script>
@endsection