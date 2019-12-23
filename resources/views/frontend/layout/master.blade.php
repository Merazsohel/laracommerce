@php
    $data = \App\Category::with('subcategory')->select('id','category')->get();
    $subTitle = \Illuminate\Support\Facades\DB::table('settings')->select('site_title')->first();
    $favIcon = \Illuminate\Support\Facades\DB::table('settings')->select('favicon')->first();
    $address = \Illuminate\Support\Facades\DB::table('settings')->select('address')->first();
    $facebook = \Illuminate\Support\Facades\DB::table('settings')->select('facebook_link')->first();
    $twitter = \Illuminate\Support\Facades\DB::table('settings')->select('twitter_link')->first();
    $instagram = \Illuminate\Support\Facades\DB::table('settings')->select('instagram_link')->first();
    $linkedIn = \Illuminate\Support\Facades\DB::table('settings')->select('linkedIn_link')->first();
    $copyright = \Illuminate\Support\Facades\DB::table('settings')->select('copyright_text')->first();
    $email = \Illuminate\Support\Facades\DB::table('settings')->select('email')->first();
    $mobile = \Illuminate\Support\Facades\DB::table('settings')->select('mobile')->first();

@endphp

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$subTitle->site_title}}</title>
    <meta name="robots" content="noindex, follow"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/image/favicon/'.$favIcon->favicon)}}">
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
<body>

<div class="main-wrapper">

    <header class="header">

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
                                @if(\Illuminate\Support\Facades\Session::get('customer_id'))
                                    <li><a href="{{url('account')}}">My account</a></li>
                                  @else
                                    <li><a href="{{url('customer-login')}}">Login</a></li>
                                @endif

                                <li><a href="{{url('cart')}}">Cart</a></li>
                                <li><a href="{{url('checkout')}}">Checkout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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

        <div class="haeader-bottom-area bg-gren header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 d-none d-lg-block">
                        <div class="main-menu-area white_text">
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
                        <div class="logo"><a href="{{url('/')}}"><img src="{{asset('public/frontend')}}/images/logo/logo.png"  alt=""></a></div>
                    </div>


                    <div class="col-lg-3 col-md-6 col-7 d-block d-lg-none">
                        <div class="right-blok-box text-white d-flex">


                            <div class="shopping-cart-wrap">
                                <a href="{{url('cart')}}"><i class="icon-basket-loaded"></i><span class="cart-total">{{Cart::count()}}</span></a>

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

        <aside class="off-canvas-wrapper">
            <div class="off-canvas-overlay"></div>
            <div class="off-canvas-inner-content">
                <div class="btn-close-off-canvas">
                    <i class="fa fa-times"></i>
                </div>

                <div class="off-canvas-inner">

                    <div class="search-box-offcanvas">
                        <form method="get" action="{{url('search-product')}}">
                            <input type="text" id="search_text" name="q" class="search-field search-input" placeholder="Search product..." required>
                            <button type="submit" class="search btn btn-primary">Search</button>
                        </form>
                    </div>

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

                    </div>

                    <div class="offcanvas-widget-area">
                        <div class="top-info-wrap text-left text-black">
                            <h5>My Account</h5>
                            <ul class="offcanvas-account-container">
                                @if(\Illuminate\Support\Facades\Session::get('customer_id'))
                                    <li><a href="{{url('account')}}">My account</a></li>
                                @else
                                    <li><a href="{{url('customer-login')}}">Login</a></li>
                                @endif

                                <li><a href="{{url('cart')}}">Cart</a></li>
                                <li><a href="{{url('checkout')}}">Checkout</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </aside>

    </header>


@yield('content')

    <footer>
        <div class="footer-top section-pb section-pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">

                        <div class="widget-footer mt-40">
                            <h6 class="title-widget">Contact Info</h6>

                            <div class="footer-addres">
                                <div class="widget-content mb--20">
                                    <p>{{$address->address}}</p>
                                    <p>Phone: <a href="tel:">{{$mobile->mobile}}</a></p>
                                    <p>Email: <a href="tel:">{{$email->email}}</a></p>
                                </div>
                            </div>

                            <ul class="social-icons">

                                <li>
                                    <a class="facebook social-icon" href="{{$facebook->facebook_link}}" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>

                                <li>
                                    <a class="twitter social-icon" href="{{$twitter->twitter_link}}" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a class="instagram social-icon" href="{{$instagram->instagram_link}}" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                                </li>

                                <li>
                                    <a class="linkedin social-icon" href="{{$linkedIn->linkedIn_link}}" title="Linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
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
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copy-left-text">
                            <p>{{$copyright->copyright_text}}</p>
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
            minLength: 1,

        });
    });
</script>

@yield('script')
</body>


</html>