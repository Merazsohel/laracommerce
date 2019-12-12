<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('title')
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontend')}}/images/favicon.ico">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/vendor/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/vendor/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins/slick.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins/animation.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins/fancy-box.css">

    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/plugins/jqueryui.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend')}}/css/style.css">

</head>
@php

    $allCategories=[];
    $data = \App\Category::with('subcategory')->select('id','category')->get();
    $allCategories['allCategories']=$data;

@endphp
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

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="top-info-wrap text-right">
                            <ul class="my-account-container">
                                <li><a href="{{url('/')}}">My account</a></li>
                                <li><a href="{{url('cart')}}">Cart</a></li>
                                <li><a href="{{url('/checkout')}}">Checkout</a></li>
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
                            <a href="{{url('/')}}"><img src="{{asset('public/frontend')}}/images/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="search-box-wrapper">
                            <div class="search-box-inner-wrap">

                                <form class="search-box-inner" method="get" action="{{url('search-product')}}">
                                    <div class="search-field-wrap">

                                        <input type="text" id="search_text" name="q" class="search-field search-input" placeholder="Search product..." required>

                                    </div>

                                    <button type="submit" class="search btn btn-primary">Search</button>

                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="right-blok-box text-white d-flex">

                            <div class="shopping-cart-wrap">
                                <a href="{{url('cart')}}"><i class="icon-basket-loaded"></i><span class="cart-total">{{Cart::count()}}</span></a>
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
                                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                                    @foreach($data as $categories)
                                        <li>

                                            <a href="#">{{ $categories->category  }} <i
                                                        class="fa fa-angle-down"></i></a>

                                            <ul class="mega-menu">
                                                <li>
                                                    @foreach($categories->subcategory as $subcategory)
                                                        <ul>
                                                            <li>
                                                                <a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}">{{ $subcategory->subcategory }}</a>
                                                            </li>

                                                        </ul>
                                                    @endforeach
                                                </li>


                                            </ul>

                                        </li>
                                    @endforeach

                                </ul>
                            </nav>

                        </div>
                    </div>

                    <div class="col-5 col-md-6 d-block d-lg-none">
                        <div class="logo"><a href="#"><img src="{{asset('public/frontend')}}/images/logo/logo.png"
                                                           alt=""></a></div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                        <div class="right-blok-box text-white d-flex">

                            <div class="user-wrap">
                                <a href="#"><span class="cart-total">2</span> <i class="icon-heart"></i></a>
                            </div>

                            <div class="shopping-cart-wrap">
                                <a href="#"><i class="icon-basket-loaded"></i><span class="cart-total">2</span></a>
                                <ul class="mini-cart">
                                    <li class="cart-item">
                                        <div class="cart-image">
                                            <a href="#"><img alt=""
                                                             src="{{asset('public/frontend')}}/images/product/product-02.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="#">
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
                                            <a href="#"><img alt=""
                                                             src="{{asset('public/frontend')}}/images/product/product-03.png"></a>
                                        </div>
                                        <div class="cart-title">
                                            <a href="#">
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
                                            <a href="#">View cart</a>
                                            <a href="#">Checkout</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="mobile-menu-btn d-block d-lg-none">
                                <div class="off-canvas-btn">
                                    <a href="#"><img src="{{asset('public/frontend')}}/images/icon/bg-menu.png" alt=""></a>
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
                        <nav>
                            <ul class="mobile-menu">
                                <li class="menu-item-has-children"><a href="#">Home</a></li>

                                @foreach($data as $categories)
                                <li class="menu-item-has-children"><a href="#">{{ $categories->category  }}</a>
                                    @foreach($categories->subcategory as $subcategory)
                                    <ul class="megamenu dropdown">

                                        <li><a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}">{{ $subcategory->subcategory }}</a></li>

                                    </ul>
                                    @endforeach
                                </li>
                                    @endforeach

                            </ul>
                        </nav>
                        <!-- mobile menu navigation end -->
                    </div>
                    <!-- mobile menu end -->

                    <div class="offcanvas-widget-area">
                        <div class="top-info-wrap text-left text-black">
                            <h5>My Account</h5>
                            <ul class="offcanvas-account-container">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Checkout</a></li>
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


@yield('content')

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
                                    <p>Address: Merul Badda, Dhaka, <br> 1207.</p>
                                    <p>Phone: <a href="tel:">+880 1629064868</a></p>
                                    <p>Email: <a href="tel:">info@merazsohel.com</a></p>
                                </div>
                            </div>

                            <ul class="social-icons">
                                <li>
                                    <a class="facebook social-icon" href="#" title="Facebook" target="_blank"><i
                                                class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter social-icon" href="#" title="Twitter" target="_blank"><i
                                                class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="instagram social-icon" href="#" title="Instagram" target="_blank"><i
                                                class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a class="linkedin social-icon" href="#" title="Linkedin" target="_blank"><i
                                                class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="rss social-icon" href="#" title="Rss" target="_blank"><i
                                                class="fa fa-rss"></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Information</h6>
                            <ul class="footer-list">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('/')}}">About Us</a></li>
                                <li><a href="{{url('/')}}">Quick Contact</a></li>
                                <li><a href="{{url('/')}}">Blog Pages</a></li>
                                <li><a href="#">Concord History</a></li>
                                <li><a href="#">Client Feed</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Extras</h6>
                            <ul class="footer-list">

                                <li><a href="{{url('/')}}">Concord History</a></li>
                                <li><a href="{{url('/')}}">Client Feed</a></li>
                                <li><a href="{{url('/')}}">About Us</a></li>
                                <li><a href="{{url('/')}}">Quick Contact</a></li>
                                <li><a href="{{url('/')}}">Blog Pages</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Get the app</h6>
                            <p>GreenLife App is now available on Google Play & App Store. Get it now.</p>
                            <ul class="footer-list">
                                <li><img src="{{asset('public/frontend')}}/images/brand/img-googleplay.jpg" alt=""></li>
                                <li><img src="{{asset('public/frontend')}}/images/brand/img-appstore.jpg" alt=""></li>
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
                            <p>Copyright &copy; <a href="#">Meraz</a> 2019. All Right Reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="copy-right-image">
                            <img src="{{asset('public/frontend')}}/images/icon/img-payment.png" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer End -->


    <!-- Modal -->
    <div class="modal fade modal-wrapper" id="exampleModalCenter">
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
                                        <img src="{{asset('public/frontend')}}/images/product/product-01.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('public/frontend')}}/images/product/product-02.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-large-img ">
                                        <img src="{{asset('public/frontend')}}/images/product/product-03.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('public/frontend')}}/images/product/product-04.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{asset('public/frontend')}}/images/product/product-05.png"
                                             alt="product-details"/>
                                    </div>

                                </div>
                                <div class="product-nav">
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('public/frontend')}}/images/product/product-01.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('public/frontend')}}/images/product/product-02.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('public/frontend')}}/images/product/product-03.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('public/frontend')}}/images/product/product-04.png"
                                             alt="product-details"/>
                                    </div>
                                    <div class="pro-nav-thumb">
                                        <img src="{{asset('public/frontend')}}/images/product/product-05.png"
                                             alt="product-details"/>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue
                                            nec est tristique auctor.</p>

                                        <div class="single-add-to-cart">
                                            <form action="#" class="cart-quantity d-flex">
                                                <div class="quantity">
                                                    <div class="cart-plus-minus">
                                                        <input type="number" class="input-text" name="quantity"
                                                               value="1" title="Qty">
                                                    </div>
                                                </div>
                                                <button class="add-to-cart" type="submit">Add To Cart</button>
                                            </form>
                                        </div>
                                        <ul class="single-add-actions">
                                            <li class="add-to-wishlist">
                                                <a href="wishlist.html" class="add_to_wishlist"><i
                                                            class="icon-heart"></i> Add to Wishlist</a>
                                            </li>
                                        </ul>
                                        <ul class="stock-cont">
                                            <li class="product-stock-status">Categories: <a href="#">Watchs,</a> <a
                                                        href="#">Man Watch</a></li>
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


<script src="{{asset('public/frontend')}}/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="{{asset('public/frontend')}}/js/vendor/jquery-3.3.1.min.js"></script>
<script src="{{asset('public/frontend')}}/js/vendor/popper.min.js"></script>
<script src="{{asset('public/frontend')}}/js/vendor/bootstrap.min.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/slick.min.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/jquery.nice-select.min.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/countdown.min.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/image-zoom.min.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/fancybox.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/scrollup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script src="{{asset('public/frontend')}}/js/plugins/ajax-contact.js"></script>
<script src="{{asset('public/frontend')}}/js/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        src = "{{ route('search') }}";
        $("#search_text").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: src,
                    dataType: "json",
                    data: {
                        term : request.q
                    },
                    success: function(data) {
                        response(data);

                    }
                });
            },
            minLength: 3,

        });
    });
</script>

@yield('script')
</body>


</html>