@extends('front.layouts.master')
@section('title')
    <title>Buy Qualified {{$category->category}} Products On | westernhutt.com</title>
@endsection
@section('body_class', 'page-product detail-product')
@section('content')
<main class="site-main product-list product-grid">
        <div class="container">
            <ol class="breadcrumb-page">
                <li><a href="{{route('index')}}">Home </a></li>
                <li class="active"><a href="{{route('category',$category->category)}}">{{$category->category}} </a></li>
            </ol>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 float-none float-right padding-left-5">
                    <div class="main-content">
                        <div class="toolbar-products">
                            <h4 class="title-product">Products That Match {{$category->category}}</h4>
                        </div>
                        <div class="block-recent-view">
                                <div class="">
                                    <div class="nav-style2 border-background equal-container">
                                        @foreach($category->product as $product)
                                            <div class="col-md-3" style="padding: 0">
                                                <div class="product-item style1">
                                                    <div class="product-inner equal-elem">
                                                        <div class="product-thumb">
                                                            <div class="thumb-inner">
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}"><img src="{{ asset('image/product-images/'.$product->singleImage->image) }}" alt="r1"></a>
                                                            </div>
                                                            <!-- <span class="onsale">-50%</span> -->
                                                            <a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}" class="quick-view">View Details</a>
                                                        </div>
                                                        <div class="product-innfo">
                                                            <div class="product-name"><a href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{$product->title}}</a></div>
                                                            <span class="price">
                                                                <ins>৳ {{$product->price}}</ins>
                                                            </span>
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
                <div class="col-md-3 col-sm-4">
                    <div class="col-sidebar">
                        <div class="filter-options">
                            <div class="block-title">Shop by</div>
                            <div class="block-content">
                                <div class="filter-options-item filter-categori">
                                    <div class="filter-options-title">Available Options</div>
                                    <div class="filter-options-content">
                                        <ul>
                                            @foreach($category->subcategory as $subcategory)
                                                <li> <i class="fa fa-hand-o-right" aria-hidden="true"></i> <a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}">{{$subcategory->subcategory}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection
