@extends('frontend.layout.master')
@section('content')
    <div class="jumbotron text-center">
        <h4>Thank You For Purchase From Us!</h4>
        <p class="lead"><strong>Please check your email</strong> for your order details Or You can check your <a
                   class="btn btn-primary" href="{{url('account')}}">Account</a></p>
        <hr>
        <p>
            Having trouble? <a href="{{url('contact-us')}}" target="_top">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Continue Shopping</a>
        </p>
    </div>
@endsection