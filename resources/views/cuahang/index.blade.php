@extends('layout.layout');

@section('css')
<link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
<!-- animate CSS -->
<link rel="stylesheet" href="{{asset('dist/css/animate.css')}}">
<!-- owl carousel CSS -->
<link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
<!-- font awesome CSS -->
<link rel="stylesheet" href="{{asset('dist/css/all.css')}}">
<!-- flaticon CSS -->
<link rel="stylesheet" href="{{asset('dist/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('dist/css/themify-icons.css')}}">
<!-- font awesome CSS -->
<link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
<!-- swiper CSS -->
<link rel="stylesheet" href="{{asset('dist/css/slick.css')}}">
<!-- style CSS -->
<link rel="stylesheet" href="{{asset('dist/css/style.css')}}">
@endsection


@section('main-content')
 <!-- banner part start-->
 <section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="banner_slider owl-carousel">
                    <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Wood & Cloth
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('dist/img/banner_img.png')}}" alt="">
                            </div>
                        </div>
                    </div><div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Cloth & Wood
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('dist/img/banner_img.png')}}" alt="">
                            </div>
                        </div>
                    </div><div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Wood & Cloth
                                            Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="{{asset('dist/img/banner_img.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="single_banner_slider">
                        <div class="row">
                            <div class="col-lg-5 col-md-8">
                                <div class="banner_text">
                                    <div class="banner_text_iner">
                                        <h1>Cloth $ Wood Sofa</h1>
                                        <p>Incididunt ut labore et dolore magna aliqua quis ipsum
                                            suspendisse ultrices gravida. Risus commodo viverra</p>
                                        <a href="#" class="btn_2">buy now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="banner_img d-none d-lg-block">
                                <img src="img/banner_img.png" alt="">
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="slider-counter"></div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->

<!-- feature_part start-->
<section class="feature_part padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section_tittle text-center">
                    <h2>Featured Category</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>

                    <a href="{{route('store.product_detail')}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('dist/img/feature/feature_1.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('store.product_detail')}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('dist/img/feature/feature_2.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('store.product_detail')}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('dist/img/feature/feature_3.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-sm-6">
                <div class="single_feature_post_text">
                    <p>Premium Quality</p>
                    <h3>Latest foam Sofa</h3>
                    <a href="{{route('store.product_detail')}}" class="feature_btn">EXPLORE NOW <i class="fas fa-play"></i></a>
                    <img src="{{asset('dist/img/feature/feature_4.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- upcoming_event part start-->

<!-- product_list start-->
<section class="product_list section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>awesome <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="product_list_slider owl-carousel">
                    <div class="single_product_list_slider">
                        <div class="row align-items-center justify-content-between">
                            @foreach ($product as $item)
                            <a href="{{route('store.product_detail',$item->id)}}">
                            <div class="col-lg-3 col-sm-6">
                                <div class="single_product_item">
                                    <img src="{{asset('images/product/'.$item->thumbnail->name)}}" alt="">
                                    <div class="single_product_text">
                                        <h4>{{$item->name}}</h4>
                                        <h3>{{$item->price}}</h3>
                                        <a href="#" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                            </a>
                            @endforeach








                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part start-->

<!-- awesome_shop start-->
<section class="our_offer section_padding">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-md-6">
                <div class="offer_img">
                    <img src="{{asset('dist/img/offer_img.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="offer_text">
                    <h2>Weekly Sale on
                        60% Off All Products</h2>
                    <div class="date_countdown">
                        <div id="timer">
                            <div id="days" class="date"></div>
                            <div id="hours" class="date"></div>
                            <div id="minutes" class="date"></div>
                            <div id="seconds" class="date"></div>
                        </div>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">book now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- awesome_shop part start-->

<!-- product_list part start-->
<section class="product_list best_seller section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best Sellers <span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">

                    @foreach ($product as $item)
                    <a href="{{route('store.product_detail',$item->id)}}">
                    <div class="single_product_item">
                        <img src="{{asset('images/product/'.$item->thumbnail->name)}}" alt="">
                        <div class="single_product_text">
                            <h4>{{$item->name}}</h4>
                            <h3>{{$item->price}}</h3>
                        </div>
                    </div>
                </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->

<!-- subscribe_area part start-->
<section class="subscribe_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="subscribe_area_text text-center">
                    <h5>Join Our Newsletter</h5>
                    <h2>Subscribe to get Updated
                        with new offers</h2>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter email address"
                            aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <a href="#" class="input-group-text btn_2" id="basic-addon2">subscribe now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->

<!-- subscribe_area part start-->
<section class="client_logo padding_top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
                <div class="single_client_logo">
                    <img src="{{asset('dist/img/client_logo/client_logo_1.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!--::subscribe_area part end::-->
@endsection

@section('js')
 <!-- jquery plugins here-->
 <script src="{{asset('dist/js/jquery-1.12.1.min.js')}}"></script>
 <!-- popper js -->
 <script src="{{asset('dist/js/popper.min.js')}}"></script>
 <!-- bootstrap js -->
 <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
 <!-- easing js -->
 <script src="{{asset('dist/js/jquery.magnific-popup.js')}}"></script>
 <!-- swiper js -->
 <script src="{{asset('dist/js/swiper.min.js')}}"></script>
 <!-- swiper js -->
 <script src="{{asset('dist/js/masonry.pkgd.js')}}"></script>
 <!-- particles js -->
 <script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
 <script src="{{asset('dist/js/jquery.nice-select.min.js')}}"></script>
 <!-- slick js -->
 <script src="{{asset('dist/js/slick.min.js')}}"></script>
 <script src="{{asset('dist/js/jquery.counterup.min.js')}}"></script>
 <script src="{{asset('dist/js/waypoints.min.js')}}"></script>
 <script src="{{asset('dist/js/contact.js')}}"></script>
 <script src="{{asset('dist/js/jquery.ajaxchimp.min.js')}}"></script>
 <script src="{{asset('dist/js/jquery.form.js')}}"></script>
 <script src="{{asset('dist/js/jquery.validate.min.js')}}"></script>
 <script src="{{asset('dist/js/mail-script.js')}}"></script>
 <!-- custom js -->
 <script src="{{asset('dist/js/custom.js')}}"></script>

@endsection

