<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')
    <link rel="icon" href="{{asset('front/images/favicon.png')}}" type="image/x-icon" />
     <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.6/assets/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.css">
    
     
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('back/plugins/iCheck/all.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/css/custom.css')}}">
   
   
</head>
@php
    $allCategories=[];
    $data=\Illuminate\Support\Facades\Cache::get('allCategories',[]);
    if(empty($data))
    {
        $data = \App\Category::with('subcategory')->select('id','category')->get();
        \Illuminate\Support\Facades\Cache::forever('allCategories',$data);
    }
    $allCategories['allCategories']=$data;

@endphp
@section('body_class', 'index-opt-3')
<body class="index-opt-3">
<div class="wrapper">
    <form id="block-search-mobile" method="get" class="block-search-mobile">
        <div class="form-content">
            <div class="control">
                <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                <input type="text" name="search" placeholder="Search" class="input-subscribe">
                <button type="submit" class="btn search">
                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </form>
    <!-- HEADER -->
    <header class="site-header header-opt-1">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <!-- hotline -->
                <ul class="nav-top-left" >
                    <li><a href="#.">Welcome to Meraz Shop</a></li>
                </ul><!-- hotline -->
                <!-- heder links -->
                <ul class="nav-top-right krystal-nav">
                    <li ><a href="">Help Line : +88 01629 064 868</a></li>
                
                    @guest('customer')
                        <li class="menu-item-has-children">
                            <a href="{{route('customerlogin')}}"><i class="fa fa-user" aria-hidden="true"></i>Register / Sign in</a>
                        </li>
                        @else

                            <li class="menu-item-has-children">
                                <a href="#" class="dropdown-toggle">
                                    My Account
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <ul class="submenu parent-megamenu">
                                    <li class="switcher-option">
                                        <a href="{{route('profile')}}" class="switcher-flag icon">My Profile</a>
                                    </li>
                                    <li class="switcher-option">
                                        <a href="{{route('customerorders')}}" class="switcher-flag icon">My Orders</a>
                                    </li>
                                    <li class="switcher-option">
                                        <a class="dropdown-item" href="{{route('customerlogout')}}"
                                           onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                            {{ __('Logout')}}
                                        </a>
                                        <form id="logout-form" action="{{route('customerlogout')}}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest

                </ul><!-- heder links -->
            </div>
        </div> <!-- header-top -->
        <!-- header-content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 nav-left">
                        <!-- logo -->
                        <strong class="logo">
                            <a href="{{route('index')}}">Logo Will be here</a>
                        </strong><!-- logo -->
                    </div>
                    <div class="col-md-8 nav-mind">
                        <!-- block search -->
                        <div class="block-search">
                            <div class="block-content">
                                <form method="get" action="{{route('searchproduct')}}" id="searchform">
                                <div class="categori-search  ">
                                    <select data-placeholder="All Categories" id="categoryoption" class="chosen-select categori-search-option">
                                        <option value="">All Categories</option>
                                        @foreach($data as $d)
                                            <optgroup label="- {{$d->category}}">
                                                @foreach($d->subcategory as $subcategory)
                                                    <option value="{{$subcategory->subcategory}}">{{$subcategory->subcategory}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-search">
                                    <div class="box-group">
                                        <input type="hidden" name="category" id="optionvalue">
                                        <input type="text" id="contents" name="contents" class="form-control" placeholder="Searh entire store here...">
                                        <button class="btn btn-search" type="submit"><span>search</span></button>
                                    </div>
                                    <div class="search-result">
                                        
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div><!-- block search -->
                    </div>
                    <div class="col-md-2 nav-right">
                        <!-- block mini cart -->
                        <div class="block-minicart dropdown">

                            <a class="minicart" href="#">
                                    <span class="counter qty">
                                        <span class="cart-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                        <span class="counter-number" id="cart-content">
                                            @if(!empty(Cart::content()) && count(Cart::content()) > 0)
                                                {{count(Cart::content())}}
                                            @else
                                                0
                                            @endif
                                        </span>
                                    </span>
                                <span class="counter-your-cart">
                                        <span class="counter-label">Your Cart:</span>
                                        <span class="counter-price" id="totalPrice">
                                            @if(count(Cart::content()) > 0)
                                                {{(Cart::subtotal())}}
                                            @else
                                                0
                                            @endif</span>
                                    </span>
                            </a>
                            <div class="parent-megamenu">
                                <form>
                                    <div class="minicart-content-wrapper" >
                                        <div class="subtitle">
                                            You have <span id="popupCartDetails">
                                                    @if(count(Cart::content()) > 0)
                                                    {{count(Cart::content())}}
                                                @else
                                                    0
                                                @endif
                                                </span> item(s) in your cart
                                        </div>
                                       
                                        <div class="actions">
                                            <a class="btn btn-viewcart" href="{{route('cart')}}">View cart</a>
                                            <a class="btn btn-checkout" href="{{route('checkout')}}">Checkout</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- block mini cart -->
                        <a href="" class="hidden-md search-hidden"><span class="pe-7s-search"></span></a>
                        <a class="wishlist-minicart" href="{{route('allwishlist')}}" title="My Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div><!-- header-content -->
        <!-- header-menu-bar -->

        <div class="header-menu-bar header-sticky">
            <div class="header-menu-nav menu-style-2">
                <div class="container">
                    <div class="header-menu-nav-inner">
                        <div id="box-vertical-megamenus" class="box-vertical-megamenus nav-toggle-cat">
                            <h4 class="title active">
                                    <span class="btn-open-mobile home-page">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                <span class="title-menu">All Departments</span>
                            </h4>
                            <div class="vertical-menu-content" >
                                <span class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></span>
                                <ul class="vertical-menu-list">
                                    @foreach($data as $categories)
                                        @if(count($categories->subcategory) > 0)
                                            <li class="menu-item-has-children arrow item-megamenu">
                                                <a href="#" class="dropdown-toggle">{{ $categories->category  }}</a>
                                                <span class="toggle-submenu hidden-md"></span>
                                                <div class="submenu parent-megamenu megamenu">
                                                    <div class="row">
                                                        <div class="submenu-banner submenu-banner-menu-1">
                                                            @foreach($categories->subcategory as $subcategories)
                                                                <div class="col-md-4">
                                                                    <div class="dropdown-menu-info">
                                                                        <a href="{{route('subcategoryFind',[$subcategories->subcategory,$subcategories->id])}}"><h6 class="dropdown-menu-title"> {{ $subcategories->subcategory }} </h6></a>
                                                                        <div class="dropdown-menu-content">
                                                                            <ul class="menu">
                                                                                @foreach($subcategories->childcategory as $childcategory)
                                                                                    <li class="menu-item"><a href="{{route('childcategory',[$childcategory->childcategory,$childcategory->id])}}">{{ $childcategory->childcategory  }}</a></li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        @else
                                            <li><a href="">{{ $categories->category  }}</a></li>
                                        @endif
                                 @endforeach
                                </ul>
                            </div>
                        </div>

                        <div class="header-menu header-menu-resize">
                            <ul class="header-nav krystal-nav">
                                <li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>

                                @foreach($data as $categories)
                                    @if(count($categories->subcategory) > 0)
                                        <li class="menu-item-has-children arrow item-megamenu item-megamenu-sub">
                                            <a href="#." class="dropdown-toggle">{{ $categories->category  }}</a>
                                            <span class="toggle-submenu hidden-md"></span>
                                            <div class="submenu parent-megamenu megamenu">
                                                <div class="row">
                                                    <div class="submenu-banner submenu-banner-menu-3">
                                                        @foreach($categories->subcategory as $subcategory)
                                                            <div class="col-md-3">
                                                                <div class="dropdown-menu-info">
                                                                <a href="{{route('subcategoryFind',[$subcategory->subcategory,$subcategory->id])}}"><h6 class="dropdown-menu-title"> {{ $subcategory->subcategory }} </h6></a>
                                                                    <div class="dropdown-menu-content">
                                                                        <ul class="menu">
                                                                            @foreach($subcategory->childcategory as $childcategory)
                                                                                <li class="menu-item"><a href="{{route('childcategory',[$childcategory->childcategory,$childcategory->id])}}">{{ $childcategory->childcategory  }}</a></li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @else
                                        <li>
                                            <a href="" class="dropdown-toggle">{{ $categories->category  }}</a>
                                            <span class="toggle-submenu hidden-md"></span>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <span data-action="toggle-nav" class="menu-on-mobile hidden-md">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- end HEADER -->
    <!-- MAIN -->
    <main class="site-main">
        @yield('content')
    </main><!-- end MAIN -->
    <!-- FOOTER -->
    <footer class="site-footer footer-opt-2">
        <div class="footer-top full-width">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="newsletter-title">
                            <h3 class="h3-newsletter">Sign up to Newsletter</h3>
                           
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="newsletter-form">
                            <form id="newsletter-validate-detail" class="form subscribe">
                                <div class="control">
                                    <input type="email" placeholder="Enter your email address" id="newsletter" name="email" class="input-subscribe">
                                    <button type="submit" title="Subscribe" class="btn subscribe">
                                        <span>Sign Up</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-column equal-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 equal-elem">
                        <h3 class="title-of-section">About Us</h3>
                        <div class="contacts">
                            <p class="contacts-info">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                            <span class="contacts-info info-address ">Merul Badda, Dhaka</span>
                            <span class="contacts-info info-phone"> +88 0162 9064 868 </span>
                            <span class="contacts-info info-support">info@merazsohel.com</span>
                            <div class="socials">
                                <a href="" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="" class="social"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                                <a href="" class="social"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-elem">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 equal-elem">
                                <div class="links">
                                    <h3 class="title-of-section">My account</h3>
                                    <ul>
                                        <li><a href="">Sign In</a></li>
                                        <li><a href="">View Cart</a></li>
                                        <li><a href="">My Wishlist</a></li>
                                        <li><a href="">Terms & Conditions</a></li>
                                        <li><a href="">Contact us</a></li>
                                        <li><a href="">Track My Order</a></li>
                                        <li><a href="">Help</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 equal-elem">
                                <div class="links">
                                    <h3 class="title-of-section">Information</h3>
                                    <ul>
                                        <li><a href="">Specials</a></li>
                                        <li><a href="">New products</a></li>
                                        <li><a href="">Best sellers</a></li>
                                        <li><a href="">Our stores</a></li>
                                        <li><a href="">Contact us</a></li>
                                        <li><a href="">Sitemap</a></li>
                                        <li><a href="">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 equal-elem">
                                <div class="links">
                                    <h3 class="title-of-section">Information</h3>
                                    <ul>
                                        <li><a href="">Specials</a></li>
                                        <li><a href="">New products</a></li>
                                        <li><a href="">Best sellers</a></li>
                                        <li><a href="">Our stores</a></li>
                                        <li><a href="">Contact us</a></li>
                                        <li><a href="">Sitemap</a></li>
                                        <li><a href="">Blog</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright full-width">
            <div class="container">
                <div class="copyright-right">
                    © Copyright 2019<span> Meraz Shop</span>. All Rights Reserved.
                </div>
                <div class="pay-men">
                    <a href=""><img src="{{ asset('front/images/home1/pay1.jpg')}}" alt="pay1"></a>
                    <a href=""><img src="{{ asset('front/images/home1/pay2.jpg')}}" alt="pay2"></a>
                    <a href=""><img src="{{ asset('front/images/home1/pay3.jpg')}}" alt="pay3"></a>
                    <a href=""><img src="{{ asset('front/images/home1/pay4.jpg')}}" alt="pay4"></a>
                </div>
            </div>
        </div>
    </footer><!-- end FOOTER -->

   

</div>
<a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script type="text/javascript" src="{{asset('front/js/owl.carousel.min.js')}}"></script>


<script type="text/javascript" src="{{asset('front/js/jquery.actual.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.7.0/chosen.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.1.2/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.sticky.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="{{asset('front/js/fancybox/source/helpers/jquery.fancybox-media.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/fancybox/source/helpers/jquery.fancybox-thumbs.js')}}"></script>
<script type="text/javascript" src="{{asset('front/js/function.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script type="text/javascript" src="{{asset('front/js/jquery.plugin.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-countdown/2.0.2/jquery.countdown.js"></script>
<!-- iCheck 1.0.1 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.1/icheck.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>





<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('body').click(function(e){
        if(($(e.target).attr("id") != "contents") ){
            $(".search-result").hide();
        }
    });

    @if(session('carterror'))
        swal({
            title: "Invalid !",
            text: "{{session('carterror')}}",
            icon: "error",
            button: "Ok!",
        });
    @endif
    @if(session('success'))
    swal({
        title: "Done !",
        text: "{{session('success')}}",
        icon: "success",
        button: "Ok!",
    });
    @endif

    $('#categoryoption').on('change',function () {
        $('#optionvalue').val($(this).val());
    })
    $(document).ready(function(){
        $("#searchform").submit(function() {
            $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
            return true; // ensure form still submits
        });
        $("#searchform" ).find( ":input" ).prop( "disabled", false );
    })

    $('#contents').keyup(function () {
        var keyword=($(this).val());

        if(keyword.length>2){
            $.ajax({
                type:'post',
                url:window.location.origin+"/ecommerce/public/search/keyword",
                data:{
                    keyword:keyword,
                },
                success:function (data) {
                    //console.log(data[0][0].single_image.image);
                    var option='';
                    option+="<ul>";
                    for(var i=0;i<data[0].length;i++)
                    {
                        option+= "<li data-title='"+data[0][i].title+"' data-code='"+data[0][i].id+"' class='product item' data-tracking='walto' data-tracking-trigger='searchSuggestionShopExpress'>"+
                            "<a >"+
                            "<span class='product-image'>" +
                            "<img class='lazy image -loaded' src='/ecommerce/public/image/product-images/"+data[0][i].single_image.image+"'>" +
                            "</span>"+
                            "<span class='product-details'>"+
                            "<span class='product-title'>"+

                            "<span>"+data[0][i].title+"</span>"+
                            "</span>"+
                            "<span class='product-price'>৳ "+data[0][i].price+"</span>"+
                            "</span>"+
                            "</a>"+
                            "</li>";
                    }
                    option+= "<li class='load-more'>"+
                        "<a href='javascript:void(0)' id='allresults'>See All Results "+data[1]+"</a>"+
                        "</li>"+
                        "</ul>";
                    $('.search-result').html(option);
                },
                error:function (xms) {
                    alert(xms.responseText);
                }
            });
        }
    })

    $(document).on('click','.item',function () {
        $('#contents').attr("disabled", "disabled");
        $('#optionvalue').attr("disabled", "disabled");
        $("#searchform").attr('action',  document.location.origin+'/ecommerce/public/product/'+$(this).attr('data-title')+'/'+$(this).attr('data-code'));
        document.getElementById("searchform").submit();
    });

    $(document).on('click','#allresults',function () {
        window.location.href=document.location.origin+'/ecommerce/public/search/?contents='+$('#contents').val();
    })
</script>
@yield('script')
</body>
</html>