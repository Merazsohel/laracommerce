@extends('frontend.layout.master')
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Contact Us</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    @if(session()->has('message'))
        <div class="col-md-6 col-lg-6  ml-5 mt-5 alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif

    <main class="page-content section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form">
                        <div class="contact-form-info">
                            <div class="contact-title">
                                <h3>Contact us</h3>
                            </div>

                            <form  action="{{url('contact-us')}}" method="post">
                                @csrf
                                <div class="contact-page-form">
                                    <div class="contact-input">
                                        <div class="contact-inner">
                                            <input name="name" type="text" placeholder="Name *">
                                            <span class="text-danger">{{$errors->has('name')?$errors->first('name'):''}}</span>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="email" type="email" placeholder="Email *">
                                            <span class="text-danger">{{$errors->has('email')?$errors->first('email'):''}}</span>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="phone" type="text" placeholder="Phone *">
                                            <span class="text-danger">{{$errors->has('phone')?$errors->first('phone'):''}}</span>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="subject" type="text" placeholder="Subject *">
                                            <span class="text-danger">{{$errors->has('subject')?$errors->first('subject'):''}}</span>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="message" placeholder="Message *"></textarea>
                                            <span class="text-danger">{{$errors->has('message')?$errors->first('message'):''}}</span>
                                        </div>
                                    </div>
                                    <div class="contact-submit-btn">
                                        <button class="submit-btn" type="submit">Submit</button>
                                        <p class="form-messege"></p>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection