@extends('frontend.layout.master')
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Cart Page</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>

    <div class="main-content-wrap section-ptb cart-page">
        <div class="container">
            <div class="row">
                <div class="col-12 cart-table">

                    <div class="table-content table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="plantmore-product-thumbnail">Images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="plantmore-product-quantity">Color</th>
                                <th class="plantmore-product-quantity">Size</th>
                                <th class="plantmore-product-price">Unit Price</th>
                                <th class="plantmore-product-quantity">Quantity</th>
                                <th class="plantmore-product-subtotal">Total</th>
                                <th class="plantmore-product-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($cartContents as $cartContent)

                                <tr>
                                    <td class="plantmore-product-thumbnail">
                                        <a href="{{route('productdetails',['title'=>$cartContent->name,'id'=>$cartContent->id])}}">

                                            <img src="{{asset('public/image/product-images/'.$cartContent->options->image)}}"
                                                 alt="" style="width: 50px">
                                        </a>
                                    </td>

                                    <td class="plantmore-product-name"><a
                                                href="{{route('productdetails',['title'=>str_replace(' ','-',$cartContent->name),'id'=>$cartContent->id])}}">{{$cartContent->name}}</a>
                                    </td>

                                    <td class="plantmore-product-price"><span
                                                class="amount"> {{$cartContent->options->color}}</span></td>

                                    <td class="plantmore-product-price"><span
                                                class="amount"> {{$cartContent->options->size}}</span></td>

                                    <td class="plantmore-product-price"><span
                                                class="amount">৳ {{$cartContent->price}}</span></td>

                                    <td class="plantmore-product-quantity">

                                        <form action="{{ route('cart.update') }}" method="post">
                                            @csrf
                                            <input type="number" name="qty" value="{{$cartContent->qty}}"
                                                   style="width:45px;text-align: center">
                                            <input type="hidden" name="rowId" value="{{$cartContent->rowId}}">
                                            <input type="submit" class="btn-sm " value="+" style="width: 40px;">

                                        </form>

                                    </td>


                                    <td class="product-subtotal">
                                        <span class="price"
                                              id="{{$cartContent->rowId}}">৳ {{$cartContent->subtotal}}</span>
                                    </td>


                                    <td class="plantmore-product-remove">
                                        <a href="{{ route('cart.remove', $cartContent->rowId) }}" onclick="return confirm('Are You Sure?')"><i
                                                    class="fa fa-trash" style="color: red"></i></a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>


                    <div class="row">
                        <div class="col-md-8">
                            <div class="coupon-all">

                                <div class="coupon2">

                                    <a href="{{url('/')}}" class=" continue-btn">Continue Shopping</a>
                                </div>

                                <div class="coupon">
                                    <h3>Coupon</h3>
                                    <p>Enter your coupon code if you have one.</p>
                                    <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                           placeholder="Coupon code" type="text">
                                    <input class="button" name="apply_coupon" value="Apply coupon" type="submit">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="cart-page-total">
                                <h2>Cart totals</h2>
                                <ul>
                                    <li>Subtotal <span>৳ {{Cart::subtotal()}}</span></li>
                                    <li>Shipping <span>৳ 50 </span></li>
                                    <li>Total <span>৳ {{Cart::total()}}</span></li>
                                </ul>
                                <a href="{{url('checkout')}}" class="proceed-checkout-btn">Proceed to checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection