@extends('frontend.layout.master')

@section('title')
    <title>Meraz Shop</title>
@endsection

@section('content')

    <div class="hero-slider hero-slider-one">
        @foreach($adsliders as $adslider)
            <div class="single-slide"
                 style="background-image: url({{ asset('public/image/advertisement-images/'.$adslider->photo) }}); height: 370px">
                <div class="hero-content-one container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="slider-content-text text-left">
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
                        <a href="#"><img src="{{asset('public/frontend')}}/images/banner/banner-01.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('public/frontend')}}/images/banner/banner-02.jpg" alt=""></a>
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
                                <h4 class="title">All categories</h4>

                                <div class="category-sub-menu">
                                    <ul>
                                        @foreach($data as $categories)
                                            <li class="has-sub"><a href="#">{{ $categories->category  }}</a>
                                                <ul>
                                                    @foreach($categories->subcategory as $subcategory)
                                                        <li>
                                                            <a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}"> <strong>{{ $subcategory->subcategory }}</strong> </a>
                                                        </li>

                                                        @foreach($subcategory->childcategory as $childcategory)
                                                            <li class="menu-item">
                                                                <a href="{{route('childcategory',[$childcategory->childcategory,$childcategory->id])}}">{{ $childcategory->childcategory  }}</a>
                                                            </li>
                                                        @endforeach

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

                                        <span>-</span>

                                        <span class="inlineinput">
                                           <input type='text' class="form-control" name="max"
                                                  style='display: inline; width:90px;'/>
                                        </span>

                                        <div class="mt-3">
                                            <input type="submit" class="btn btn-small btn-secondary ml-5" value="FILTER"
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
                                                <div class="col-lg-3 col-md-6">
                                                    <div class="single-product-area mt-30">
                                                        <div class="product-thumb">
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                                                <img class="primary-image"
                                                                     src="{{asset('public/image/product-images/'.$product->singleImage->image)}}"
                                                                     alt="">
                                                            </a>

                                                            @if($product->supplierprice != $product->price)
                                                                <div class="label-product label_new">{{ round((($product->supplierprice - $product->price) * 100) / $product->supplierprice) }}% OFF</div>
                                                            @endif

                                                            <div class="action-links">
                                                                <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                                            </div>
                                                        </div>
                                                        <div class="product-caption">
                                                            <h4 class="product-name"><a
                                                                        href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{str_limit($product->title,50)}}</a>
                                                            </h4>
                                                            <div class="price-box">
                                                                <span class="new-price">৳ {{$product->price}}</span>
                                                                @if($product->supplierprice != $product->price)
                                                                <span class="old-price">৳ {{$product->supplierprice}}</span>
                                                                 @endif
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
                                                            @if($product->supplierprice != $product->price)
                                                                <span class="old-price">৳ {{$product->supplierprice}}</span>
                                                            @endif
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
                            <div class="mt-5 float-right">
                                {{ $products->links() }}
                            </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="product-area section-pb section-pt-30">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Brand New Products</h4>
                    </div>
                </div>
            </div>

            <div class="row product-active-lg-4">
                @foreach($newProducts as $product)
                    <div class="col-lg-12">
                        <div class="single-product-area mt-30">
                            <div class="product-thumb">
                                <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">
                                    <img class="primary-image" src="{{asset('public/image/product-images/'.$product->singleImage->image)}}" alt="" style="width: 230px;height: 230px">
                                </a>

                                @if($product->supplierprice != $product->price)
                                    <div class="label-product label_new">{{ round((($product->supplierprice - $product->price) * 100) / $product->supplierprice) }}% OFF</div>
                                @endif

                                <div class="action-links">
                                    <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                    <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                </div>
                            </div>
                            <div class="product-caption">
                                <h4 class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{str_limit($product->title,50)}}</a></h4>
                                <div class="price-box">
                                    <span class="new-price">৳ {{$product->price}}</span>
                                    @if($product->supplierprice != $product->price)
                                        <span class="old-price">৳ {{$product->supplierprice}}</span>
                                    @endif
                                </div>
                            </div>
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



    <div class="modal fade modal-wrapper" id="exampleModalCenter" >
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-inner-area">
                        <div class="row  product-details-inner">
                            <div class="col-lg-5 col-md-6 col-sm-6">
                                <!-- Product Details Left -->
                                <div class="product-large-slider">

                                    @foreach($product->image as $image)


                                        <div class="pro-large-img img-zoom">
                                            <img src="{{asset('public/image/product-images/'.$image->image)}}"
                                                 alt="product-details"/>
                                            <a href="{{asset('public/image/product-images/'.$image->image)}}"
                                               data-fancybox="images"><i class="fa fa-search"></i></a>
                                        </div>
                                    @endforeach


                                </div>
                                <div class="product-nav">
                                    @foreach($product->image as $image)

                                        <div class="pro-nav-thumb">
                                            <img src="{{asset('public/image/product-images/'.$image->image)}}"
                                                 alt="product-details"/>
                                        </div>

                                    @endforeach

                                </div>

                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content">
                                    <div class="product-info">
                                        <h3>{{$product->title}}</h3>

                                        <div class="price-box">
                                            <span class="new-price">৳ {{$product->price}}</span>
                                            <span class="old-price">৳ {{$product->price}}</span>
                                        </div>
                                        <p>{!! $product->keypoint !!}</p>

                                        <div class="single-add-to-cart">
                                            <form action="{{url('add-to-cart')}}" class="cart-quantity d-flex" method="post">
                                                @csrf
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="number" class="input-text" name="qty" value="1" title="Qty" min="1">
                                                        <input name="product_id" type="hidden" value="{{$product->id}}"/>

                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="submit">Add To Cart</button>
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

@stop

@section('script')
    <script type="text/javascript">
        function handleSelect(elm) {
            window.location = elm.value;
        }
    </script>
@endsection