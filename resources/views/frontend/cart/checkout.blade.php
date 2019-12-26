@extends('frontend.layout.master')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">Checkout Page</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrap section-ptb checkout-page">
        <div class="container">
            <div class="checkout-details-wrapper">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="billing-details-wrap">


                            <h3 class="shoping-checkboxt-title">Billing Details</h3>


                                <div class="row">

                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Name <span class="required">*</span></label>
                                            <input type="text" name="name" value="{{$customer_info->customer_name}}" readonly>
                                        </p>
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Address <span class="required">*</span></label>
                                            <input type="text" name="address" value="{{$customer_info->address}}" readonly>
                                        </p>
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Phone <span class="required">*</span></label>
                                            <input type="text" name="mobile_number" value="{{$customer_info->mobile_number}}" readonly>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="email" name="email" value="{{$customer_info->email_address}}" readonly>
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                    <span style="color: red">**Note: If you want to update your billing info please click <a
                                                class="btn btn-info" href="{{url('account')}}"> here</a></span>
                                    </div>

                                </div>



                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="your-order-wrapper">
                            <h3 class="shoping-checkboxt-title">Your Order</h3>

                            <div class="your-order-wrap">
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach(Cart::content() as $cartContent)

                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    {{$cartContent->name}} <strong class="product-quantity">
                                                        × {{$cartContent->qty}}</strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount">৳ {{$cartContent->price * $cartContent->qty}}.00</span>
                                                </td>
                                            </tr>

                                        @endforeach

                                        </tbody>
                                        <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">৳ {{Cart::subtotal()}}</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping</th>
                                            <td>
                                                <ul>
                                                    <li><span class="amount">৳ 50</span></li>

                                                </ul>
                                            </td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">৳ {{Cart::total()}}</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <form action="{{route('order')}}" method="post">
                                    @csrf
                                <div class="payment-method">
                                    <div class="payment-accordion">

                                    <label><input type="radio" name="payment_type" value="cash_on_delivery"> Cash On Delivery</label>

                                     <label><input type="radio" name="payment_type" value="ssl_commerz"> Online Payment</label> <br/>
                                        <span class="text-danger">{{$errors->has('payment_type')?$errors->first('payment_type'):''}}</span>

                                    </div>

                                    <div class="order-button-payment">
                                        <input type="submit" value="Place order"/>
                                    </div>
                                </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection