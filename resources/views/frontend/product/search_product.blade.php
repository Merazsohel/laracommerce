@extends('frontend.layout.master')

@section('title')
    <title>Meraz Shop</title>
@endsection

@section('content')


    <div class="container">
        <div class="row ">
            @if(count($products)>0)
            @foreach ($products as $product)
                <div class="col-md-4 col-lg-3 col-12">
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
                                        href="{{route('productdetails',['title'=>$product->title,'id'=>$product->id])}}">{{$product->title}}</a></h4>
                            <div class="price-box">
                                <span class="new-price">৳ {{$product->price}}</span>
                                <span class="old-price">৳ {{$product->price}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @else
                <div class="col-md-4 col-lg-3 col-12 mb-30 mt-50 text-center">
                    <p class="alert alert-danger">No Product Found in this category.</p>
                </div>
        </div>

        @endif
        </div>
    </div>
@stop