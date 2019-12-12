@extends('frontend.layout.master')
@section('content')

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                            <form action="#">
                                <h3 class="shoping-checkboxt-title">Billing Details</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <p class="single-form-row">
                                            <label>First name <span class="required">*</span></label>
                                            <input type="text" name="First name">
                                        </p>
                                    </div>
                                    <div class="col-lg-6">
                                        <p class="single-form-row">
                                            <label>Username or email <span class="required">*</span></label>
                                            <input type="text" name="Last name">
                                        </p>
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Street address <span class="required">*</span></label>
                                            <input type="text" placeholder="House number and street name"
                                                   name="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>City <span class="required">*</span></label>
                                            <input type="text" name="address">
                                        </p>
                                    </div>

                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Phone</label>
                                            <input type="text" name="address">
                                        </p>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="single-form-row">
                                            <label>Email <span class="required">*</span></label>
                                            <input type="text" name="email">
                                        </p>
                                    </div>

                                </div>
                            </form>
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
                                                    <span class="amount">৳ {{$cartContent->price * $cartContent->qty}}</span>
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
                                            <td><strong><span class="amount">৳ {{Cart::total()+50}}</span></strong>
                                            </td>
                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">

                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="Place order"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection