@extends('front.layouts.master')
@section('title')
    <title>Login to westernhutt| westernhutt.com</title>
@endsection
@section('content')
    <div class="container">
    </div>
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <h5 class="title-login">Login to your account</h5>
                    @if(session('registersuccess'))
                        <div class="alert alert-success">
                            {{session('registersuccess')}}
                        </div>
                    @endif
                    @section('script')
                        <script>
                            $(document).ready(function () {
                                @if($errors->has('username'))
                                swal({
                                    title: "Invalid Login !",
                                    text: "{{session('orderconfirm')}}",
                                    icon: "error",
                                    button: "Ok!",
                                });
                                @endif
                            })
                        </script>
                    @endsection
                    <form class="login" method="post" action="{{route('loginsubmit')}}">
                        {{csrf_field()}}
                        <p class="form-row form-row-wide">
                            <label>Username:<span class="required"></span></label>
                            <input type="text" value="" name="username" placeholder="Type your username" class="input-text" required>
                        </p>
                        <p class="form-row form-row-wide">
                            <label>Password:<span class="required"></span></label>
                            <input type="password" name="password" placeholder="************" class="input-text" required>
                        </p>
                        <ul class="inline-block">
                            <li><label class="inline" ><input type="checkbox"><span class="input"></span>Remember me</label></li>
                        </ul>
                        <a href="" class="forgot-password">Forgotten password?</a>
                        <p class="form-row">
                            <input type="submit" value="Login" name="Login" class="button-submit"> Or <a href="{{route('customeregistration')}}">Create new account</a>
                        </p>
                    </form>

                </div>

            </div>
        </div>
    </div>
@endsection

