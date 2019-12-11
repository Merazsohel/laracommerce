@extends('front.layouts.master')
@section('title')
    <title>Customer Profile | westernhutt.com</title>
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
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">My Info</div>
                                                    <div class="panel-body">
                                                        <table>
                                                            <tr>
                                                                <td>Name : </td>
                                                                <td> {{$profile->fname}} {{$profile->lname}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Email : </td>
                                                                <td> {{$profile->email}}</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">Complete Orders</div>
                                                    <div class="panel-body">{{$totalColpleteOrders}}</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">Pending Orders</div>
                                                    <div class="panel-body">{{$totalPendingOrders}}</div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">Total Amount of Purchase</div>
                                                    @if(!is_null($totalAmount))
                                                        <div class="panel-body">{{$totalAmount->total}} /-</div>
                                                    @else
                                                        <div class="panel-body">0 /-</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
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
        $(document).ready(function () {
        @if(session('orderconfirm'))
            swal({
                title: "Thank You!",
                text: "{{session('orderconfirm')}}",
                icon: "success",
                button: "Ok!",
            });
        @endif
        })
    </script>
@endsection