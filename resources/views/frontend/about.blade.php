@extends('frontend.layout.master')
@section('content')

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active">About Us</li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <main class="about-us-page section-ptb">

        <div class="about-us_area section-pb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-us_img">
                            <img src="{{asset('public/frontend/')}}/images/banner/about-us_bg.jpg" alt="About Us Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-us_content">
                            <h3 class="heading mb-20">About Ruiz</h3>
                            <p class="short-desc mb-20">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias rem omnis fugiat
                                dolores tenetur voluptatum explicabo illo vitae pariatur. Accusantium dolorum tempore,
                                ullam assumenda nulla aliquid, voluptatibus veniam rem reprehenderit laboriosam itaque
                                nihil velit doloremque vel! Natus, atque. Nesciunt modi tenetur, excepturi deserunt
                                aperiam velit itaque. Modi, incidunt molestiae perspiciatis ratione error quidem
                                pariatur laborum dignissimos nihil, quos cumque earum eveniet possimus dicta!
                            </p>
                            <div class="munoz-btn-ps_left slide-btn">
                                <a class="btn" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonials-area bg-gray section-ptb">

            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class=" testimonials-area">
                            <div class="row testimonial-two slick-initialized slick-slider">
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                         style="opacity: 1; width: 4800px; transform: translate3d(-2400px, 0px, 0px);">

                                        <div class="col-lg-6 ml-auto mr-auto slick-slide slick-cloned"
                                             data-slick-index="-1" aria-hidden="true" style="width: 600px;"
                                             tabindex="-1">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-01.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Kathy Young</h6>
                                                        <p>CEO of SunPark</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ml-auto mr-auto slick-slide" data-slick-index="0"
                                             aria-hidden="true" style="width: 600px;" tabindex="-1">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-01.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Niloba Khan</h6>
                                                        <p>CEO of Hasbar</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ml-auto mr-auto slick-slide" data-slick-index="1"
                                             aria-hidden="true" style="width: 600px;" tabindex="-1">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-02.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Devite oni</h6>
                                                        <p>CEO of SunPark</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ml-auto mr-auto slick-slide slick-current slick-active"
                                             data-slick-index="2" aria-hidden="false" style="width: 600px;"
                                             tabindex="0">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-01.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Kathy Young</h6>
                                                        <p>CEO of SunPark</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ml-auto mr-auto slick-slide slick-cloned slick-active"
                                             data-slick-index="3" aria-hidden="false" style="width: 600px;"
                                             tabindex="-1">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-01.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Niloba Khan</h6>
                                                        <p>CEO of Hasbar</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 ml-auto mr-auto slick-slide slick-cloned"
                                             data-slick-index="4" aria-hidden="true" style="width: 600px;"
                                             tabindex="-1">
                                            <div class="testimonial-wrap-two text-center">
                                                <div class="quote-container">
                                                    <div class="quote-image">
                                                        <img src="{{asset('public/frontend/')}}/images/testimonial/testimonial-02.jpg"
                                                             alt="">
                                                    </div>
                                                    <div class="author">
                                                        <h6>Devite oni</h6>
                                                        <p>CEO of SunPark</p>
                                                    </div>
                                                    <div class="testimonials-text">
                                                        <p>Support and response has been amazing, helping me with
                                                            several issues I came across and got them solved almost the
                                                            same day. A pleasure to work with them!</p>
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
        </div>
    </main>
@endsection