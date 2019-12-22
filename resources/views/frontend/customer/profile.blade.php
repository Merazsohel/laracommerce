@extends('frontend.layout.master')
@section('content')
    <div class="main-content-wrap section-ptb my-account-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="account-dashboard">

                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <!-- Nav tabs -->
                                <ul role="tablist" class="nav flex-column dashboard-list">
                                    <li><a href="#dashboard" data-toggle="tab" class="nav-link active">Dashboard</a>
                                    </li>
                                    <li><a href="#orders" data-toggle="tab" class="nav-link">Orders</a></li>
                                    <li><a href="#account-details" data-toggle="tab" class="nav-link">Account
                                            details</a></li>
                                    <li><a href="{{url('customer-logout')}}" class="nav-link">logout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-12 col-lg-10">
                                <!-- Tab panes -->
                                <div class="tab-content dashboard-content">
                                    <div class="tab-pane active" id="dashboard">
                                        <h3>Dashboard </h3>
                                        <p>From your account dashboard. you can easily check &amp; view your <a
                                                    href="#">recent orders</a>, manage your <a href="#">shipping and
                                                billing addresses</a> and <a href="#">edit your password and account
                                                details.</a></p>
                                    </div>
                                    <div class="tab-pane fade" id="orders">
                                        <h3>Orders</h3>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Quantity</th>
                                                    <th>Total</th>
                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach($orders as $order)

                                                    <tr>

                                                        <td>{{date('F d, Y', strtotime($order->created_at))}}</td>
                                                        <td>{{$order->cycle}}</td>
                                                        <td>{{$order->qty}}</td>
                                                        <td>৳ {{$order->total}}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                    <div class="tab-pane fade" id="account-details">
                                        <h3>Account details </h3>
                                        <div class="login">
                                            <div class="login-form-container">
                                                <div class="account-login-form">

                                                    <form action="{{url('profile-update/'.$profile->id)}}" method="post">
                                                        @csrf
                                                        <div class="account-input-box">
                                                            <label>Name</label>
                                                            <input type="text" name="customer_name" value="{{$profile->customer_name}}">

                                                            <label>Email</label>
                                                            <input type="text" name="email_address" value="{{$profile->email_address}}">

                                                            <label>Password</label>
                                                            <input type="password" name="password" value="{{$profile->password}}">

                                                            <label>Mobile Number</label>
                                                            <input type="text" name="mobile_number" value="{{$profile->mobile_number}}">

                                                            <label>Address</label>
                                                            <input type="text" name="address" value="{{$profile->address}}">

                                                        </div>

                                                        <div class="button-box">
                                                            <button class="btn default-btn" type="submit">Update </button>
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection