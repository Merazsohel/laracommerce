<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ruiz - Watch Store HTML Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend')}}/images/favicon.ico">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/animation.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/fancy-box.css">
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins/jqueryui.min.css">

    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

</head>

<body>

<div class="main-wrapper">

    <!--  Header Start -->
    <header class="header">

        <!-- Header Top Start -->
        <div class="header-top-area d-none d-lg-block text-color-white bg-gren border-bm-1">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-top-settings">
                            <ul class="nav align-items-center">
                                <li class="language">English <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </li>
                                <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                    <ul class="dropdown-list curreny-list">
                                        <li><a href="#">$ USD</a></li>
                                        <li><a href="#"> € EURO</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-info-wrap text-right">
                            <ul class="my-account-container">
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- Header Top End -->

        <!-- haeader Mid Start -->
        <div class="haeader-mid-area bg-gren border-bm-1 d-none d-lg-block ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-5">
                        <div class="logo-area">
                            <a href="index.html"><img src="{{asset('frontend')}}/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="search-box-wrapper">
                            <div class="search-box-inner-wrap">
                                <form class="search-box-inner">
                                    <div class="search-select-box">
                                        <select class="nice-select">
                                            <optgroup label=" Watch">
                                                <option value="volvo">All</option>
                                                <option value="saab">Watch</option>
                                                <option value="saab">Air cooler</option>
                                            </optgroup>
                                            <optgroup label="Fashion">
                                                <option value="mercedes">Womens tops</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                    <div class="search-field-wrap">
                                        <input type="text" class="search-field" placeholder="Search product...">

                                        <div class="search-btn">
                                            <button><i class="icon-magnifier"></i></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-blok-box text-white d-flex">

                            <div class="user-wrap">
                                <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                            </div>

                            <div class="shopping-cart-wrap">
                                <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img alt="" src="{{asset('frontend')}}/images/product/product-02.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="product-details.html">
                                                <h4>Product Name 01</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="icon_close"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img alt="" src="{{asset('frontend')}}/images/product/product-03.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="product-details.html">
                                                <h4>Product Name 03</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>Sub-Total :</h3><span>$ 260.99</span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="cart.html">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- haeader Mid End -->

        <!-- haeader bottom Start -->
        <div class="haeader-bottom-area bg-gren header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="main-menu-area white_text">
                            <!--  Start Mainmenu Nav-->
                            <nav class="main-navigation text-center">
                                <ul>
                                    <li class="active"><a href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="index.html">Home Page 1</a></li>
                                            <li><a href="index-2.html">Home Page 2</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Shop <i class="fa fa-angle-down"></i></a>
                                        <ul class="mega-menu">
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                    <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                    <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                    <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog.html">Product Details</a>
                                                <ul>
                                                    <li><a href="product-details.html">Single Product Details</a></li>
                                                    <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                    <li><a href="affiliate-product-details.html">affiliatel Product Details</a></li>
                                                    <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="error404.html">Error 404</a></li>
                                                    <li><a href="compare.html">Compare Page</a></li>
                                                    <li><a href="cart.html">Cart Page</a></li>
                                                    <li><a href="checkout.html">Checkout Page</a></li>
                                                    <li><a href="wishlist.html">Wish List Page</a></li>
                                                </ul>
                                            </li>
                                        </ul>

                                    </li>
                                    <li><a href="blog.html">Blog <i class="fa fa-angle-down"></i></a>

                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                            <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                            <li><a href="blog-details.html">Blog Details Page</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="frequently-questions.html">FAQ</a></li>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">login &amp; register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li><a href="contact-us.html">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>

                    <div class="col-5 col-md-6 d-block d-lg-none">
                        <div class="logo"><a href="index.html"><img src="{{asset('frontend')}}/images/logo/logo.png" alt=""></a></div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                        <div class="right-blok-box text-white d-flex">

                            <div class="user-wrap">
                                <a href="wishlist.html"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                            </div>

                            <div class="shopping-cart-wrap">
                                <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img alt="" src="{{asset('frontend')}}/images/product/product-02.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="product-details.html">
                                                <h4>Product Name 01</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="fa fa-times"></i></a>
                                        </div>
                                    </li>
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="product-details.html"><img alt="" src="{{asset('frontend')}}/images/product/product-03.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="product-details.html">
                                                <h4>Product Name 03</h4>
                                            </a>
                                            <div class="quanti-price-wrap">
                                                <span class="quantity">1 ×</span>
                                                <div class="price-box"><span class="new-price">$130.00</span></div>
                                            </div>
                                            <a class="remove_from_cart" href="#"><i class="icon-trash icons"></i></a>
                                        </div>
                                    </li>
                                    <li class="subtotal-box">
                                        <div class="subtotal-title">
                                            <h3>Sub-Total :</h3><span>$ 260.99</span>
                                        </div>
                                    </li>
                                    <li class="mini-cart-btns">
                                        <div class="cart-btns">
                                            <a href="cart.html">View cart</a>
                                            <a href="checkout.html">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="{{asset('frontend')}}/images/icon/bg-menu.png" alt=""></a>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- haeader bottom End -->

        <!-- off-canvas menu start -->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>

                <div class="off-canvas-inner">

                    <div class="search-box-offcanvas">
                        <form>
                            <input type="text" placeholder="Search product...">
                            <button class="search-btn"><i class="icon-magnifier"></i></button>
                        </form>
                    </div>

                    <!-- mobile menu start -->
                    <div class="mobile-navigation">

                        <!-- mobile menu navigation start -->
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="index.html">Home Page 1</a></li>
                                        <li><a href="index-2.html">Home Page 2</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Shop</a>
                                    <ul class="megamenu dropdown">
                                        <li class="mega-title has-children"><a href="#">Shop Layouts</a>
                                            <ul class="dropdown">
                                                <li><a href="shop.html">Shop Left Sidebar</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                <li><a href="shop-list-left.html">Shop List Left Sidebar</a></li>
                                                <li><a href="shop-list-right.html">Shop List Right Sidebar</a></li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Product Details</a>
                                            <ul class="dropdown">
                                                <li><a href="product-details.html">Single Product Details</a></li>
                                                <li><a href="variable-product-details.html">Variable Product Details</a></li>
                                                <li><a href="affiliate-product-details.html">affiliatel Product Details</a></li>
                                                <li><a href="gallery-product-details.html">Gallery Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="mega-title has-children"><a href="#">Shop Pages</a>
                                            <ul class="dropdown">
                                                <li><a href="error404.html">Error 404</a></li>
                                                <li><a href="compare.html">Compare Page</a></li>
                                                <li><a href="cart.html">Cart Page</a></li>
                                                <li><a href="checkout.html">Checkout Page</a></li>
                                                <li><a href="wishlist.html">Wish List Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Blog</a>
                                    <ul class="dropdown">
                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Page</a></li>
                                        <li><a href="blog-largeimage.html">Blog Large Image</a></li>
                                        <li><a href="blog-details.html">Blog Details Page</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children "><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="frequently-questions.html">FAQ</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="login-register.html">login &amp; register</a></li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->


                    <div class="header-top-settings offcanvas-curreny-lang-support">
                        <h5>My Account</h5>
                        <ul class="nav align-items-center">
                            <li class="language">English <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="curreny-wrap">Currency <i class="fa fa-angle-down"></i>
                                <ul class="dropdown-list curreny-list">
                                    <li><a href="#">$ USD</a></li>
                                    <li><a href="#"> € EURO</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                    <!-- offcanvas widget area start -->
                    <div class="offcanvas-widget-area">
                        <div class="top-info-wrap text-left text-black">
                            <h5>My Account</h5>
                            <ul class="offcanvas-account-container">
                                <li><a href="my-account.html">My account</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>

                    </div>
                    <!-- offcanvas widget area end -->
                </div>
            </div>
        </aside>
        <!-- off-canvas menu end -->

    </header>
    <!--  Header Start -->

    <!-- Hero Section Start -->
    <div class="hero-slider hero-slider-one">

        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url({{asset('frontend')}}/images/slider/slide-bg-2.jpg)">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-left">
                            <h5>Exclusive Offer -20% Off This Week</h5>
                            <h1>H-Vault Classico</h1>
                            <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                            <p>Starting At <strong>$1.499.00</strong></p>
                            <div class="slide-btn-group">
                                <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->

        <!-- Single Slide Start -->
        <div class="single-slide" style="background-image: url({{asset('frontend')}}/images/slider/slide-bg-1.jpg)">
            <!-- Hero Content One Start -->
            <div class="hero-content-one container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="slider-content-text text-left">
                            <h5>Exclusive Offer -20% Off This Week</h5>
                            <h1>H-Vault Classico</h1>
                            <p>H-Vault Watches Are A Lot Like Classic American Muscle Cars - Expect For The American Part That Is. </p>
                            <p>Starting At <strong>$1.499.00</strong></p>
                            <div class="slide-btn-group">
                                <a href="shop.html" class="btn btn-bordered btn-style-1">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Content One End -->
        </div>
        <!-- Single Slide End -->

    </div>
    <!-- Hero Section End -->

    <!-- Banner Area Start -->
    <div class="banner-area section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('frontend')}}/images/banner/banner-01.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('frontend')}}/images/banner/banner-02.jpg" alt=""></a>
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
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4>Best seller products</h4>
                    </div>
                </div>
            </div>

            <div class="row product-active-lg-4">
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{asset('frontend')}}/images/product/product-02.png" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li class="pigeon"><span></span></li>
                                <li  class="portage"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 002</a></h4>
                            <div class="price-box">
                                <span class="new-price">$49.00</span>
                                <span class="old-price">$90.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{asset('frontend')}}/images/product/product-03.png" alt="">
                            </a>

                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 003</a></h4>
                            <div class="price-box">
                                <span class="new-price">$55.00</span>
                                <span class="old-price">$76.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{asset('frontend')}}/images/product/product-04.png" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                            <div class="price-box">
                                <span class="new-price">$64.00</span>
                                <span class="old-price">$72.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{asset('frontend')}}/images/product/product-05.png" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                            <div class="price-box">
                                <span class="new-price">$44.00</span>
                                <span class="old-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
                <div class="col-lg-12">
                    <!-- single-product-area start -->
                    <div class="single-product-area mt-30">
                        <div class="product-thumb">
                            <a href="product-details.html">
                                <img class="primary-image" src="{{asset('frontend')}}/images/product/product-01.png" alt="">
                            </a>
                            <div class="label-product label_new">New</div>
                            <div class="action-links">
                                <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                            </div>
                            <ul class="watch-color">
                                <li class="twilight"><span></span></li>
                                <li  class="portage"><span></span></li>
                                <li class="pigeon"><span></span></li>
                            </ul>
                        </div>
                        <div class="product-caption">
                            <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                            <div class="price-box">
                                <span class="new-price">$42.00</span>
                                <span class="old-price">$49.00</span>
                            </div>
                        </div>
                    </div>
                    <!-- single-product-area end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Product Area End -->

    <!-- Banner Area Start -->
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('frontend')}}/images/banner/banner-03.jpg" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6  col-md-6">
                    <div class="single-banner mb-30">
                        <a href="#"><img src="{{asset('frontend')}}/images/banner/banner-04.jpg" alt=""></a>
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

                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-20.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-02.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-06.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-07.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-08.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-09.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-10.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-11.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-12.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-13.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-14.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-15.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>

                    </div>
                </div>

                <div class="tab-pane fade" id="nav-new" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-10.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-14.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-15.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-17.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-08.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-09.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-10.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-11.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-12.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-13.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-14.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-15.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-bestseller" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-11.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-12.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-13.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-07.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-08.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-09.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-10.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-11.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-12.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-13.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-14.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-15.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-onsale" role="tabpanel">
                    <div class="product-carousel-group">

                        <div class="row product-active-row-4">
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-20.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 001</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$44.00</span>
                                            <span class="old-price">$49.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-19.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 005</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-18.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$42.00</span>
                                            <span class="old-price">$45.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-17.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 004</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-03.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 008</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-09.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 009</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$75.00</span>
                                            <span class="old-price">$79.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-10.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 010</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$65.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-11.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 011</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-12.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 012</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-13.png" alt="">
                                        </a>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-14.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 013</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$45.00</span>
                                            <span class="old-price">$69.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                            <div class="col-lg-12">
                                <!-- single-product-area start -->
                                <div class="single-product-area mt-30">
                                    <div class="product-thumb">
                                        <a href="product-details.html">
                                            <img class="primary-image" src="{{asset('frontend')}}/images/product/product-15.png" alt="">
                                        </a>
                                        <div class="label-product label_new">New</div>
                                        <div class="action-links">
                                            <a href="cart.html" class="cart-btn" title="Add to Cart"><i class="icon-basket-loaded"></i></a>
                                            <a href="wishlist.html" class="wishlist-btn" title="Add to Wish List"><i class="icon-heart"></i></a>
                                            <a href="#" class="quick-view" title="Quick View" data-toggle="modal" data-target="#exampleModalCenter"><i class="icon-magnifier icons"></i></a>
                                        </div>
                                        <ul class="watch-color">
                                            <li class="twilight"><span></span></li>
                                            <li  class="portage"><span></span></li>
                                            <li class="pigeon"><span></span></li>
                                        </ul>
                                    </div>
                                    <div class="product-caption">
                                        <h4 class="product-name"><a href="product-details.html">Simple Product 015</a></h4>
                                        <div class="price-box">
                                            <span class="new-price">$35.00</span>
                                            <span class="old-price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- single-product-area end -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Product Area End -->

    <!-- letast blog area Start -->
    <div class="letast-blog-area section-pb">
        <div class="container">
            <div class="row">

                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 30 Oct 2019
                            </div>
                            <h4><a href="blog-details.html" class="articles-name">Ruiz Watch is one of the web's most visited watch sites and the world's</a></h4>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/images/blog/blog-01.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 20 Oct 2019
                            </div>
                            <h4><a href="blog-details.html" class="articles-name">Ruiz Watch reviews and most popular watch & timepiece blog for serious </a></h4>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/images/blog/blog-02.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="singel-latest-blog">
                        <div class="aritcles-content">
                            <div class="author-name">
                                post by: <a href="#"> Author Name</a> - 13 Oct 2019
                            </div>
                            <a href="blog-details.html" class="articles-name">Connected to the World: Introducing the G-Shock MTG-B1000-1A</a>
                        </div>
                        <div class="articles-image">
                            <a href="blog-details.html">
                                <img src="{{asset('frontend')}}/images/blog/blog-03.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- letast blog area End -->

    <!-- our-brand-area start -->
    <div class="our-brand-area section-pb">
        <div class="container">
            <div class="row our-brand-active">
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
                </div>
                <div class="brand-single-item">
                    <a href="#"><img src="{{asset('frontend')}}/images/brand/brand-01.png" alt=""></a>
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

    <!-- footer Start -->
    <footer>
        <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Contact Info</h6>

                            <div class="footer-addres">
                                <div class="widget-content mb--20">
                                    <p>Address: 123 Main Street, Anytown, <br> CA 12345 - USA.</p>
                                    <p>Phone: <a href="tel:">(012) 800 000 789</a></p>
                                    <p>Fax: <a href="tel:">(012) 800 888 789</a></p>
                                    <p>Email: <a href="tel:">demo@hashthemes.com</a></p>
                                </div>
                            </div>

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="rss social-icon" href="#" title="Rss" target="_blank"><i class="fa fa-rss"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Information</h6>
                            <ul class="footer-list">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Quick Contact</a></li>
                                <li><a href="blog.html">Blog Pages</a></li>
                                <li><a href="#">Concord History</a></li>
                                <li><a href="#">Client Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Extras</h6>
                            <ul class="footer-list">

                                <li><a href="#">Concord History</a></li>
                                <li><a href="#">Client Feed</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Quick Contact</a></li>
                                <li><a href="blog.html">Blog Pages</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Get the app</h6>
                            <p>GreenLife App is now available on Google Play & App Store. Get it now.</p>
                            <ul class="footer-list">
                                <li><img src="{{asset('frontend')}}/images/brand/img-googleplay.jpg" alt=""></li>
                                <li><img src="{{asset('frontend')}}/images/brand/img-appstore.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copy-left-text">
                            <p>Copyright &copy; <a href="#">Ruiz</a> 2019. All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="copy-right-image">
                            <img src="{{asset('frontend')}}/images/icon/img-payment.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->




    <!-- Modal -->
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
                                    <div class="pro-large-img">
                                        <img src="{{asset('frontend')}}/images/product/product-01.png" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('frontend')}}/images/product/product-02.png" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img ">
                                        <img src="{{asset('frontend')}}/images/product/product-03.png" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('frontend')}}/images/product/product-04.png" alt="product-details" />
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('frontend')}}/images/product/product-05.png" alt="product-details" />
                                    </div>

                                </div>
                                <div class="product-nav">
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('frontend')}}/images/product/product-01.png" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('frontend')}}/images/product/product-02.png" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('frontend')}}/images/product/product-03.png" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('frontend')}}/images/product/product-04.png" alt="product-details" />
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('frontend')}}/images/product/product-05.png" alt="product-details" />
                                    </div>
                                </div>
                                <!--// Product Details Left -->
                            </div>

                            <div class="col-lg-7 col-md-6 col-sm-6">
                                <div class="product-details-view-content">
                                    <div class="product-info">
                                        <h3>Single product One</h3>
                                        <div class="product-rating d-flex">
                                            <ul class="d-flex">
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                                <li><a href="#"><i class="icon-star"></i></a></li>
                                            </ul>
                                            <a href="#reviews">(<span class="count">1</span> customer review)</a>
                                        </div>
                                        <div class="price-box">
                                            <span class="new-price">$70.00</span>
                                            <span class="old-price">$78.00</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>

                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity d-flex">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="number" class="input-text" name="quantity" value="1" title="Qty">
                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="submit">Add To Cart</button>
                                            </form>
                                        </div>
                                        <ul class="single-add-actions">
                                            <li class="add-to-wishlist">
                                                <a href="wishlist.html" class="add_to_wishlist"><i class="icon-heart"></i> Add to Wishlist</a>
                                            </li>
                                        </ul>
                                        <ul class="stock-cont">
                                            <li class="product-stock-status">Categories: <a href="#">Watchs,</a> <a href="#">Man Watch</a></li>
                                            <li class="product-stock-status">Tag: <a href="#">Man</a></li>
                                        </ul>
                                        <div class="share-product-socail-area">
                                            <p>Share this product</p>
                                            <ul class="single-product-share">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            </ul>
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

</div>

<!-- JS
============================================ -->

<!-- Modernizer JS -->
<script src="{{asset('frontend')}}/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jQuery JS -->
<script src="{{asset('frontend')}}/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('frontend')}}/js/vendor/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/vendor/bootstrap.min.js"></script>

<!-- Plugins JS -->
<script src="{{asset('frontend')}}/js/plugins/slick.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/jquery.nice-select.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/countdown.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/image-zoom.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/fancybox.js"></script>
<script src="{{asset('frontend')}}/js/plugins/scrollup.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/jqueryui.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/ajax-contact.js"></script>

<!-- Vendor & Plugins JS (Please remove the comment from below vendor.min.js & plugins.min.js for better website load performance and remove js files from avobe) -->
<!--
<script src="{{asset('frontend')}}/js/vendor/vendor.min.js"></script>
<script src="{{asset('frontend')}}/js/plugins/plugins.min.js"></script>
-->

<!-- Main JS -->
<script src="{{asset('frontend')}}/js/main.js"></script>

</body>


</html>