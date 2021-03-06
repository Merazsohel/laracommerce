@extends('frontend.layout.master')
@section('content')

    <div class="main-content-wrap section-ptb lagin-and-register-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 ml-auto mr-auto">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif
                    <div class="login">
                        <div class="login-form-container">
                            <div class="account-login-form">

                                <form action="{{url('forgot-password')}}" method="post">
                                    @csrf
                                    <div class="account-input-box">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email_address" placeholder="Enter Your Email Address">

                                    </div>

                                    <div class="button-box">
                                        <button class="btn default-btn" type="submit">Submit</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection