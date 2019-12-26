@extends('frontend.layout.master')

@section('title')
    <title>Meraz Shop</title>
@endsection

@section('content')

    <div class="hero-slider hero-slider-one">
        @foreach($adsliders as $adslider)
            <div class="single-slide"
                 style="background-image: url({{ asset('public/image/advertisement-images/'.$adslider->photo) }})">
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
            </div>

        @endforeach

    </div>
    <div class="banner-area section-pt">
        <div class="container">
            <div class="row">
                @foreach($adsidebars as $adsidebar)

                    <div class="col-lg-6 col-md-6">
                        <div class="single-banner mb-30">
                            <a href="#"><img src="{{ asset('public/image/advertisement-images/'.$adsidebar->photo) }}"
                                             alt=""></a>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </div>

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

    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="shop-sidebar-wrap">
                        <div class="shop-box-area">

                            <div class="sidebar-categores-box shop-sidebar mb-30">
                                <h4 class="title">Product categories</h4>

                                <div class="category-sub-menu">
                                    <ul>
                                        @foreach($data as $categories)
                                            <li class="has-sub"><a href="#">{{ $categories->category  }}</a>
                                                <ul>
                                                    @foreach($categories->subcategory as $subcategory)
                                                        <li>
                                                            <a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}">{{ $subcategory->subcategory }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>

                            <div class="shop-sidebar mb-30">
                                <h4 class="title">Filter By Price</h4>
                                <div class="filter-price-content">

                                    <form action="{{url('price-filter')}}" method="get">
                                        @csrf

                                        <span class="inlineinput">
                                         <input type='text' name="min" class="form-control"
                                                style='display: inline; width: 90px;'/>
                                         </span>

                                        <span>To</span>

                                        <span class="inlineinput">
                                           <input type='text' class="form-control" name="max"
                                                  style='display: inline; width:90px;'/>
                                        </span>

                                        <div class="mt-3">
                                            <input type="submit" class="btn btn-small btn-primary ml-5" value="FILTER"
                                                   style="color:white">

                                        </div>
                                    </form>
                                </div>

                            </div>

                            <div class="shop-sidebar mb-30">
                                <h4 class="title">Our Brands</h4>

                                <ul class="sidebar-tag">
                                    @foreach($brands as $brand)

                                        <li><a href="{{url('brand/'.$brand->id)}}">{{$brand->name}}</a></li>

                                    @endforeach
                                </ul>

                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="shop-product-wrapper">
                        <div class="row align-itmes-center">
                            <div class="col">
                                <div class="shop-top-bar">
                                    <div class="product-mode">
                                        <ul class="nav shop-item-filter-list" role="tablist">
                                            <li class="active"><a class="active grid-view" data-toggle="tab"
                                                                  href="#grid"><i class="fa fa-th"></i></a></li>
                                            <li><a class="list-view" data-toggle="tab" href="#list"><i
                                                            class="fa fa-th-list"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product-short">
                                        <p>Sort By :</p>
                                        <select class="nice-select" onchange="javascript:handleSelect(this)">
                                            <option>Relevance</option>
                                            <option value="{{url('low-to-high')}}">Price(Low > High)</option>
                                            <option value="{{url('high-to-low')}}">Price(High > Low)</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="shop-products-wrap">
                            <div class="tab-content">
                                <div class="tab-pane active" id="grid">
                                    <div class="shop-product-wrap">
                                        <div class="row">
                                            @foreach ($products as $product)
                                                <div class="col-lg-4 col-md-6">
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                                                <img class="primary-image"
                                                                     src="{{asset('public/image/product-images/'.$product->singleImage->image)}}"
                                                                     alt="">
                                                            </a>
                                                            <div class="label-product label_new">New</div>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a
                                                                        href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{$product->title}}</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">৳ {{$product->price}}</span>
                                                                <span class="old-price">৳ {{$product->supplierprice}}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="list">
                                    <div class="shop-product-list-wrap">
                                        @foreach ($products as $product)
                                            <div class="row product-layout-list mt-30">
                                                <div class="col-lg-3 col-md-3">
                                                    <div class="single-product">
                                                        <div class="product-image">
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}"><img
                                                                        src="{{asset('public/image/product-images/'.$product->singleImage->image)}}"
                                                                        alt="Produce Images"></a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6 col-md-6">
                                                    <div class="product-content-list text-left">

                                                        <h4>
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}"
                                                               class="product-name">{{$product->title}}</a></h4>
                                                        <div class="price-box">
                                                            <span class="new-price">৳ {{$product->price}}</span>
                                                            <span class="old-price">৳ {{$product->supplierprice}}</span>
                                                        </div>

                                                        <p>{!! \Illuminate\Support\Str::limit($product->keypoint,200) !!}</p>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-md-3">
                                                    <div class="block2">
                                                        <ul class="stock-cont">

                                                            <li class="product-stock-status">Availability: <span
                                                                        class="in-stock">In Stock</span></li>
                                                        </ul>
                                                        <div class="product-button">

                                                            <div class="single-add-to-cart mt-3">

                                                                <form action="{{url('add-to-cart')}}"
                                                                      class="cart-quantity d-flex" method="post">
                                                                    @csrf
                                                                    <div class="quantity">
                                                                        <div class="cart-plus-minus">
                                                                            <input type="number" class="input-text"
                                                                                   name="qty" value="1" title="Qty"
                                                                                   min="1">
                                                                            <input name="product_id" type="hidden"
                                                                                   value="{{$product->id}}"/>

                                                                        </div>
                                                                    </div>
                                                                    <button class="add-to-cart" type="submit">Add To
                                                                        Cart
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="pagination-box">
                                    {{ $products->links() }}
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

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
                                    <form method="get" action="{{url('newsletter')}}">
                                        @csrf
                                    <input type="email" placeholder="Your email address..." required>
                                    <div class="subscribe-button">
                                        <button class="subscribe-btn" type="submit">Subscribe</button>
                                    </div>
                                    </form>
                                </div>
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                @endif
                                @if(session()->has('error'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('error') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script')
    <script type="text/javascript">
        function handleSelect(elm) {
            window.location = elm.value;
        }
    </script>
@endsection