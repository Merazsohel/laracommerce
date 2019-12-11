@extends('frontend.layout.master')

@section('title')
    <title>Meraz Shop</title>
@endsection

@section('content')
    <!-- Hero Section Start -->
    <div class="hero-slider hero-slider-one">

        <!-- Single Slide Start -->

        @foreach($adsliders as $adslider)
        <div class="single-slide" style="background-image: url({{ asset('public/image/advertisement-images/'.$adslider->photo) }})">
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-left">
                            <h5>{{ $adslider->title }}</h5>
                            <h1>{{ $adslider->title }}</h1>
                            <p>{{ $adslider->subtitle }}</p>
                            <div class="slide-btn-group">
                                <a href="{{ $adslider->link }}" class="btn btn-bordered btn-style-1">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->

        @endforeach

    </div>
    <!-- Hero Section End -->
    <!-- Banner Area Start -->
    <div class="banner-area section-pt">
        <div class="container">
            <div class="row">
                @foreach($adsidebars as $adsidebar)

                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{ asset('public/image/advertisement-images/'.$adsidebar->photo) }}" alt=""></a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>

    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('public/frontend')}}/images/banner/banner-03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('public/frontend')}}/images/banner/banner-04.jpg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->


    <!-- Product Area Start -->
    <div class="product-area section-pb section-pt-30">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <ul class="nav product-tab-menu" role="tablist">
                        <li class="product-tab-item nav-item active">
                            <a class="product-tab__link nav-link active" id="nav-featured-tab" data-toggle="tab" href="#nav-featured" role="tab" aria-selected="true">Featured</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-new-tab" data-toggle="tab" href="#nav-new" role="tab" aria-selected="false">New Arrivals</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-bestseller-tab" data-toggle="tab" href="#nav-bestseller" role="tab" aria-selected="false">Bestseller</a>
                        </li>
                        <li class="product-tab__item nav-item">
                            <a class="product-tab__link nav-link" id="nav-onsale-tab" data-toggle="tab" href="#nav-onsale" role="tab" aria-selected="false">On Sale</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="tab-content product-tab__content" id="product-tabContent">
                <div class="tab-pane fade show active" id="nav-featured" role="tabpanel">
                    <div class="product-carousel-group">
                        <div class="row ">

                            @foreach ($products as $product)

                                <div class="col-md-4 col-lg-3 col-12">
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                            <img class="primary-image" src="{{asset('public/image/product-images/'.$product->singleImage->image)}}" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{$product->title}}</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">৳ {{$product->price}}</span>
                                            <span class="old-price">৳ {{$product->price}}</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            @endforeach
                        </div>


                    </div>

                </div>


                <div class="tab-pane fade" id="nav-new" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4 col-lg-3 col-12">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area mt-30">
                                        <div class="product-thumb">
                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                                <img class="primary-image" src="{{asset('public/image/product-images/'.$product->singleImage->image)}}" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">Simple Product 001</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">৳ {{$product->price}}</span>
                                                <span class="old-price">৳ {{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4 col-lg-3 col-12">
                                    <!-- single-product-area start -->
                                    <div class="single-product-area mt-30">
                                        <div class="product-thumb">
                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                                <img class="primary-image" src="{{asset('public/image/product-images/'.$product->singleImage->image)}}" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">Simple Product 001</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">৳ {{$product->price}}</span>
                                                <span class="old-price">৳ {{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-md-4 col-lg-3 col-12">
                                    <div class="single-product-area mt-30">
                                        <div class="product-thumb">
                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                                <img class="primary-image" src="{{asset('public/image/product-images/'.$product->singleImage->image)}}" alt="">
                                            </a>
                                            <div class="label-product label_new">New</div>
                                        </div>
                                        <div class="product-caption">
                                            <h4 class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">Simple Product 001</a></h4>
                                            <div class="price-box">
                                                <span class="new-price">৳ {{$product->price}}</span>
                                                <span class="old-price">৳ {{$product->price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Product Area End -->

    <!-- our-brand-area start -->
    <div class="our-brand-area section-pb">
        <div class="container">
            <div class="row our-brand-active">
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('public/frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <!-- our-brand-area end -->

    <div class="newletter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="newletter-wrap">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-12">
                                <div class="newsletter-title mb-30">
                                    <h3>Join Our <br><span>Newsletter Now</span></h3>
                                </div>
                            </div>

                            <div class="col-lg-5 col-md-7">
                                <div class="newsletter-footer mb-30">
                                    <input type="text" placeholder="Your email address...">
                                    <div class="subscribe-button">
                                        <button class="subscribe-btn">Subscribe</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop