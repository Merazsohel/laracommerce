@extends('front.layouts.master')
@section('title')
    <title>Create New Account | westernhutt.com</title>
@endsection
@section('content')
    <div class="container">
    </div>
    <div class="customer-login">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                    <h5 class="title-login">Create your account</h5>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form class="register" method="post" action="{{route('submitregistration')}}">
                        {{csrf_field()}}
                        <p class="form-row form-row-wide col-md-6 padding-left">
                            <label>First Name<span class="required">*</span></label>
                            <input type="text"  name="fname" class="input-text" required>
                        </p>
                        <p class="form-row form-row-wide col-md-6 padding-right">
                            <label>Last Name</label>
                            <input type="text"  name="lname" class="input-text">
                        </p>
                        <p class="form-row form-row-wide col-md-6 padding-left">
                            <label>Gender</label>
                            <select name="gender" id="" class="form-control" required>
                                <option value="">Gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </p>
                        <p class="form-row form-row-wide col-md-6 padding-right">
                            <label>Username<span class="required">*</span></label>
                            <input type="text"  name="username" class="input-text" required>
                        </p>
                        <p class="form-row form-row-wide col-md-12  padding-left">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Email" class="input-text">
                        </p>
                        <p class="form-row form-row-wide col-md-6 padding-left">
                            <label>Password:<span class="required"></span></label>
                            <input type="password" name="password" class="input-text">
                        </p>
                        <p class="form-row form-row-wide col-md-6 padding-right">
                            <label>Confirm Password<span class="required">*</span></label>
                            <input type="password" name="password_confirmation" class="input-text">
                        </p>
                        <p class="form-row pull-right">
                            <input type="submit" value="Create Account" name="Submit" class="button-submit">
                        </p>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection