@extends('frontend.layout.master')
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">{{$product->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row  product-details-inner">
                <div class="col-lg-5 col-md-6">

                    <div class="product-large-slider">
                        <div class="pro-large-img img-zoom">
                            <img src="{{asset('public/image/product-images/'.$product->image[0]->image)}}" alt="product-details" />
                            <a href="{{asset('public/image/product-images/'.$product->image[0]->image)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="pro-large-img img-zoom">
                            <img src="{{asset('public/image/product-images/'.$product->image[1]->image)}}" alt="product-details" />
                            <a href="{{asset('public/image/product-images/'.$product->image[1]->image)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="pro-large-img img-zoom">
                            <img src="{{asset('public/image/product-images/'.$product->image[2]->image)}}" alt="product-details" />
                            <a href="{{asset('public/image/product-images/'.$product->image[2]->image)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>
                        <div class="pro-large-img img-zoom">
                            <img src="{{asset('public/image/product-images/'.$product->image[3]->image)}}" alt="product-details" />
                            <a href="{{asset('public/image/product-images/'.$product->image[3]->image)}}" data-fancybox="images"><i class="fa fa-search"></i></a>
                        </div>



                    </div>
                    <div class="product-nav">
                        <div class="pro-nav-thumb">
                            <img src="{{asset('public/image/product-images/'.$product->image[0]->image)}}" alt="product-details" />
                        </div>

                        <div class="pro-nav-thumb">
                            <img src="{{asset('public/image/product-images/'.$product->image[1]->image)}}" alt="product-details" />
                        </div>
                        <div class="pro-nav-thumb">
                            <img src="{{asset('public/image/product-images/'.$product->image[2]->image)}}" alt="product-details" />
                        </div>

                        <div class="pro-nav-thumb">
                            <img src="{{asset('public/image/product-images/'.$product->image[3]->image)}}" alt="product-details" />
                        </div>


                    </div>

                </div>

                <div class="col-lg-7 col-md-6">
                    <div class="product-details-view-content">
                        <div class="product-info">
                            <h3>{{$product->title}}</h3>
                            <div class="product-rating d-flex">
                                {{--<ul class="d-flex">
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                    <li><a href="#"><i class="icon-star"></i></a></li>
                                </ul>--}}

                            </div>
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

                            <ul class="stock-cont">
                                <form action="{{url('add-to-cart')}}" class="cart-quantity d-flex" method="post">
                                    @csrf
                                    @if (!$product->size->isEmpty())

                                        <li class="product-sku mt-2 mb-2">Size:
                                            @foreach($product->size as $size)
                                                <span><input type="radio" name="size"  value="{{$size->size}}"> {{$size->size}}</span>
                                            @endforeach
                                        </li>

                                    @endif

                                    @if (!$product->color->isEmpty())

                                        <li class="product-sku mt-2 mb-2">Color:
                                            @foreach($product->color as $color)
                                                <span><input type="radio" name="color"  value="{{$color->color}}"> {{$color->color}}</span>
                                            @endforeach
                                        </li>

                                @endif
                                </form>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <div class="product-description-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-tab">
                            <ul role="tablist" class="nav">
                                <li class="active" role="presentation">
                                    <a data-toggle="tab" role="tab" href="#description" class="active">Description</a>
                                </li>
                                <li role="presentation">
                                    <a data-toggle="tab" role="tab" href="#reviews">Reviews</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product_details_tab_content tab-content">

                            <div class="product_tab_content tab-pane active" id="description" role="tabpanel">
                                <div class="product_description_wrap  mt-30">
                                    <div class="product_desc mb-30">
                                        <p>{!! $product->description !!}</p>

                                    </div>

                                </div>
                            </div>

                            <div class="product_tab_content tab-pane" id="reviews" role="tabpanel">
                                <div class="review_address_inner mt-30">
                                    <div class="pro_review">
                                        @foreach($reviews as $review)
                                        <div class="review_details">
                                            <div class="review_info mb-10">
                                                {{--<ul class="product-rating d-flex mb-10">
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                    <li><span class="icon-star"></span></li>
                                                </ul>--}}
                                                <h5>{{$review->customer}} - <span>{{date('F d, Y, g:i A', strtotime($review->created_at))}}</span></h5>

                                            </div>
                                            <p>{{$review->review}}</p>
                                        </div>
                                            @endforeach
                                    </div>

                                </div>

                                <div class="rating_wrap mt-50">
                                    <h5 class="rating-title-1">Add a review </h5>

                                   {{-- <h6 class="rating-title-2">Your Rating</h6>
                                    <div class="rating_list">
                                        <div class="review_info mb-10">
                                            <ul class="product-rating d-flex mb-10">
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                                <li><span class="icon-star"></span></li>
                                            </ul>
                                        </div>
                                    </div>--}}
                                </div>

                                @if(\Illuminate\Support\Facades\Session::get('customer_id'))
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <form action="{{url('review')}}" class="comment-form-area" method="POST">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <div class="row comment-input">
                                                    <div class="col-md-6 comment-form-author mt-15">
                                                        <label>Name </label>
                                                        <input type="text" name="customer" value="{{$profile->customer_name}}" readonly>
                                                    </div>
                                                </div>
                                                <div class="comment-form-comment mt-15">
                                                    <label>Comment</label>
                                                    <textarea class="comment-notes" name="review"></textarea>
                                                </div>
                                                <div class="comment-form-submit mt-15">
                                                    <input type="submit" value="Submit" class="comment-submit">
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                    @else
                                    <div class="col-lg-12">
                                        Please Login First <a class="btn btn-info" href="{{url('customer-login')}}" style="color: white">Login</a>
                                    </div>
                                @endif



                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="related-product-area section-pt">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title">
                            <h3> Related Product</h3>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    @foreach($similiarProducts as $similiarProduct)
                        <div class="col-md-4 col-lg-3 col-12">

                            <div class="single-product-area mt-30">
                                <div class="product-thumb">
                                    <a href="{{route('productdetails',['title'=>$similiarProduct->title,'id'=>$similiarProduct->id])}}">
                                        <img class="primary-image" src="{{asset('public/image/product-images/'.$similiarProduct->singleImage->image)}}" alt="">
                                    </a>
                                    <div class="label-product label_new">New</div>

                                </div>
                                <div class="product-caption">
                                    <h4 class="product-name"><a href="{{route('productdetails',['title'=>$similiarProduct->title,'id'=>$similiarProduct->id])}}">{{$similiarProduct->title}}</a></h4>
                                    <div class="price-box">
                                        <span class="new-price">৳ {{$similiarProduct->price}}</span>
                                        <span class="old-price">৳ {{$similiarProduct->price}}</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>


        </div>
    </div>

@endsection