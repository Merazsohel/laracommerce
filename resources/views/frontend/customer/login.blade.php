@extends('frontend.layout.master')
@section('content')

<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- breadcrumb-list start -->
                <ul class="breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">login &amp; register</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main-content-wrap section-ptb lagin-and-register-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <!-- login-register-tab-list start -->
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> login </h4>
                        </a>
                        <a data-toggle="tab" href="#lg2">
                            <h4> register </h4>
                        </a>
                    </div>

                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">

                                    <form class="login" method="post" action="{{url('customer-login')}}">
                                       @csrf

                                        <div class="login-input-box">
                                            <input type="text" name="email_address" placeholder="Email Address" required>
                                            <input type="password" name="password" placeholder="Password" required>

                                        </div>

                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <div class="button-box">
                                                <button class="login-btn btn" type="submit"><span>Login</span></button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form  method="post" action="{{url('customer-register')}}">
                                        @csrf
                                        <div class="login-input-box">
                                            <input type="text"  name="customer_name" class="input-text" placeholder="Name" required>

                                            <input type="email" name="email_address" placeholder="Email"  class="input-text">

                                            <input type="text" name="mobile_number" placeholder="Mobile Number"  class="input-text">

                                            <input type="text" name="address" placeholder="Address"  class="input-text">

                                            <input type="password" name="password" placeholder="********" class="input-text">


                                        </div>
                                        <div class="button-box">
                                            <button class="register-btn btn" type="submit"><span>Register</span></button>
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

    @endsection