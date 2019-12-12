@extends('front.layouts.master')
@section('body_class', 'page-product detail-product')
@section('title')
    <title>{{$product->title}} | Buy Products Online | westernhutt.com</title>
@endsection
@section('content')
    <div style="height:20px;"></div>
    <div class="container">
        <div class="product-content-single">
            <div class="row">
                <div class="col-md-4 col-sm-12 padding-right">
                    <div class="product-media">
                        <div class="image-preview-container image-thick-box image_preview_container">
                            <img id="img_zoom" data-zoom-image="{{asset('image/product-images/'.$product->image[0]->image)}}" src="{{asset('image/product-images/'.$product->image[0]->image)}}" alt="">
                            <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <div class="product-preview image-small product_preview">
                            <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                                @foreach($product->image as $image)
                                <a href="#" data-image="{{asset('image/product-images/'.$image->image)}}" data-zoom-image="{{asset('image/product-images/'.$image->image)}}">
                                    <img src="{{asset('image/product-images/'.$image->image)}}" data-large-image="{{asset('image/product-images/'.$image->image)}}" alt="i1">
                                </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="product-info-main">
                        <div class="product-name"><a href="">{{$product->title}}</a></div>
                        <span class="star-rating">
                        </span>
                        <div class="product-infomation">
                            <h5>Key Points</h5>
                           {!! $product->keypoint !!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    
                    <div class="product-info-price">
                        <div class="product-info-stock-sku">
                            <div class="stock available">
                                <span class="label-stock">Availability: </span>In Stock
                            </div>
                        </div>
                        <div class="transportation">
                            <span>Order on phone</span> <span style="color:#ff3838">54634435</span>
                           
                        </div>
                        <div id="attribute">
                        <span class="error" style="color:#ff2e00;font-weight:bold"></span>
                        @if(count($product->color)>=1)
                            <ul>
                            Colors :
                                @foreach($product->color as $color)
                                    <li style="list-style:none;display:inline-block"><label class="inline"><input data-color="{{$color->color}}" name="colors" type="radio" class="color"><span class="input"></span>{{strtoupper($color->color)}}</label></li>
                                @endforeach
                            </ul>
                        @endif
                        @if(count($product->size)>=1)
                            <ul>
                            Sizes : 
                                @foreach($product->size as $size)
                                    <li style="list-style:none;display:inline-block"><label class="inline"><input data-size="{{$size->size}}" name="sizes" type="radio" class="size"><span class="input"></span>{{strtoupper($size->size)}}</label></li>
                                @endforeach
                            </ul>
                        @endif
                        </div>
                        <span class="price">
                            <ins>৳ {{$product->price}}</ins>
                        </span>
                        @php
                            global  $x;
                        @endphp
                        @foreach($cart as $c)
                            @if($c->id==$product->id)
                                @php
                                    $x="exist";
                                @endphp
                                @break
                            @endif
                        @endforeach
                        <div class="single-add-to-cart" id="cartAdd">
                            @if($x!='exist')
                                <a href="#." data-number="{{$product->id}}"  id="addToCart" class="btn-add-to-cart cart">Add to cart</a>
                            @else
                                <a href="{{route('cart')}}" class="btn-add-to-cart">View Cart</a>
                            @endif
                            <a href="{{route('review',['title'=>$product->title,'id'=>$product->id])}}" class="compare"><i class="fa fa-star" aria-hidden="true"></i> Post Review</a>
                            <form action="{{route('wishlist')}}" method="get" id="mywishlist">
                                <input type="hidden" name="product_code" value="{{$product->id}}">
                            </form>
                            @if(\Illuminate\Support\Facades\Auth::guard('customer')->check())
                                @if(!is_null(\App\Wishlist::where('product_id',$product->id)->where('customer_id',\Illuminate\Support\Facades\Auth::guard('customer')->user()->id)->first()))
                                    <a href="{{route('allwishlist')}}"  class="wishlist"><i class="fa fa-heart-o" aria-hidden="true" style="color: red;"></i> Added To Wishlist</a>
                                @else
                                    <a href="#." class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add To Wishlist</a>
                                @endif
                            @else
                                    <a href="#." class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i> Add To Wishlist</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tab-details-product">
            <ul class="box-tab nav-tab">
                <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                <li><a data-toggle="tab" href="#review">Reviews</a></li>
            </ul>
            <div class="tab-container">
                <div id="tab-1" class="tab-panel active">
                    <div class="box-content">
                       {!! $product->description !!}
                    </div>
                </div>

                <div id="review" class="tab-panel">
                    <div class="box-content">
                        @foreach($product->review as $review)
                            {{$review}}
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-recent-view">
        <div class="container">
            <div class="title-of-section">You may be also interested</div>
            <div class="owl-carousel nav-style2 border-background equal-container" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="0" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"1000":{"items":6}}'>
                @foreach($similiarProducts as $similiarProduct)
                <div class="product-item style1">
                    <div class="product-inner equal-elem">
                        <div class="product-thumb">
                            <div class="thumb-inner">
                                <a href="{{route('productdetails',['title'=>$similiarProduct->title,'id'=>$similiarProduct->id])}}"><img src="{{asset('image/product-images/'.$similiarProduct->singleImage->image)}}" alt="r1"></a>
                            </div>
                            {{--<span class="onsale">-50%</span>--}}
                            {{--<a href="" class="quick-view">Quick View</a>--}}
                        </div>
                        <div class="product-innfo">
                            <div class="product-name"><a href="{{route('productdetails',['title'=>$similiarProduct->title,'id'=>$similiarProduct->id])}}">{{$similiarProduct->title}}</a></div>
                            <span class="price price-red">
                                @if(!is_null($similiarProduct->discount))
                                    @php
                                        $price=$similiarProduct->price-(($similiarProduct->price*$similiarProduct->discount->amount)/100)
                                    @endphp
                                    <ins>৳ {{$price}}</ins>
                                    <del>৳ {{$similiarProduct->price}}</del>
                                @else
                                    <ins>৳ {{$similiarProduct->price}}</ins>
                                @endif
                            </span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <div class="block-section-brand">
        <div class="container">
            <div class="section-brand style1">
                <div class="owl-carousel nav-style3" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="2" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":4},"1000":{"items":6}}'>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                    <a href="" class="item-brand"><img src="{{asset('front/images/home1/brand1.jpg')}}" alt="brand1"></a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        var color='';
        var size='';
        var atttr=[];
        $('.color').on('click',function (e) {
            color=$(this).attr('data-color');
        });

        $('.size').on('click',function (e) {
            size=$(this).attr('data-size');
        });

        $(document).on('click','.cart',function (e) {
            e.preventDefault();
            var i = ($(this).attr("data-number"));
            if( ($('.color').length > 0 && color==''))
            {
                $('.error').text("Select Color !!");
            }
            else if($('.size').length > 0 && size=='')
            {
                $('.error').text("Select Size !!");
            }else {
                atttr.push(color,size);
                //alert(atttr);
                $.ajax({
                    type:'post',
                    url:'{{route('addtocart')}}',
                    data:{
                    'number':i,
                    'attr':atttr
                    },
                    success:function (res) {
                        $('#cart-content').html(res['content']);
                        $('#totalPrice').html(res['total']);
                        $('#popupCartDetails').html(res['content']);
                        $('#cartAdd').html("<a href='{{route('cart')}}' class='btn-add-to-cart'>View Cart</a>");
                    },
                    error:function (res) {
                        alert(res.responseText);
                    }
                });
            }
        });
        $('.wishlist').on('click',function () {
            $('#mywishlist').submit();
        })
    </script>
@endsection