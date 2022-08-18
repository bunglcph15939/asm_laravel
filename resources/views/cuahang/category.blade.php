 @extends('layout.layout')
 @section('css')
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
     <!-- animate CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/animate.css')}}">
     <!-- owl carousel CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
     <!-- nice select CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/nice-select.css')}}">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/all.css')}}">
     <!-- flaticon CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/flaticon.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/themify-icons.css')}}">
     <!-- font awesome CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
     <!-- swiper CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/slick.css')}}">
     <link rel="stylesheet" href="{{asset('dist/css/price_rangs.css')}}">
     <!-- style CSS -->
     <link rel="stylesheet" href="{{asset('dist/css/style.css')}}">

 @endsection
 @section('main-content')



 <!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item">
                        <h2>Shop Category</h2>
                        <p>Home <span>-</span> Shop Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Category Product Area =================-->
<section class="cat_product_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="left_sidebar_area">
                    @if (session()->has('alert'))

                    <script>
                     Swal.fire(
                         'Good job!',
                        'Thêm giỏ hàng thành công',
                          'success'
                     )
                    </script>
                    @endif

                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Product filters</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">

                                    @foreach ($category as $item)
                                    <li>
                                        <a href="{{route('store.hien_danhmuc',$item->id)}}">{{$item->name}}</a>
                                    </li>
                                    @endforeach
                            </ul>

                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets">
                        <div class="l_w_title">
                            <h3>Size</h3>
                        </div>
                        <div class="widgets_inner">
                            <ul class="list">
                                <li>
                                    <a href="{{route('store.loc_size',1)}}">Small</a>
                                </li>
                                <li>
                                    <a href="{{route('store.loc_size',2)}}">Medium</a>
                                </li>
                                <li class="active">
                                    <a href="{{route('store.loc_size',3)}}">Large</a>
                                </li>

                            </ul>
                        </div>
                    </aside>

                    <aside class="left_widgets p_filter_widgets price_rangs_aside">
                        <div class="l_w_title">
                            <h3>Price Filter</h3>
                        </div>
                        <div class="widgets_inner">
                            <div class="range_item">
                                <!-- <div id="slider-range"></div> -->
                                <input type="text" class="js-range-slider" value="" />
                                <div class="d-flex">
                                    <div class="price_text">
                                        <p>Price :</p>
                                    </div>
                                    <form action="" method="post">
                                    <div class="price_value d-flex justify-content-center">
                                        <input type="text" class="js-input-from" id="amount" name='amount' readonly />
                                        <span>to</span>
                                        <input type="text" class="js-input-to" id="amount" name='amount'  readonly />
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product_top_bar d-flex justify-content-between align-items-center">
                            <div class="single_product_menu">
                                <p><span>10000 </span> Prodict Found</p>
                            </div>


                            <div class="single_product_menu d-flex">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="search"
                                        aria-describedby="inputGroupPrepend">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend"><i
                                                class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center latest_product_inner">
                        @if (isset($loc_danhmuc))
                        @foreach ($loc_danhmuc as $item)
                    <a href="{{route('store.product_detail',$item->id)}}">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{asset('images/product/'.$item->thumbnail->name)}}"  with='100px'alt="">
                            <div class="single_product_text">
                                <h4>{{$item->name}}</h4>
                                <h3>{{$item->price}}</h3>
                                <a href="{{route('addCart',$item->id)}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                    @endif

                    @if(!empty($product))
                    @foreach ($product as $item)
                    <a href="{{route('store.product_detail',$item->id)}}">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_product_item">
                            <img src="{{asset('images/product/'.$item->thumbnail->name)}}"  with='100px'alt="">
                            <div class="single_product_text">
                                <h4>{{$item->name}}</h4>
                                <h3>{{$item->price}}</h3>
                                <a href="{{route('addCart',$item->id)}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    </a>
                    @endforeach
                    @endif

                        @if(isset($loc_size))
                        @foreach ($loc_size as $item)
                        <a href="{{route('store.product_detail',$item->id)}}">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <img src="{{asset('images/product/'.$item->thumbnail->name)}}"  with='100px'alt="">
                                <div class="single_product_text">
                                    <h4>{{$item->name}}</h4>
                                    <h3>{{$item->price}}</h3>
                                    <a href="{{route('addCart',$item->id)}}" class="add_cart">+ add to cart<i class="ti-heart"></i></a>
                                </div>
                            </div>
                        </div>
                        </a>
                        @endforeach

                        @endif



                    <div class="col-lg-12">
                        <div class="pageination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Category Product Area =================-->

<!-- product_list part start-->
<section class="product_list best_seller">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="section_tittle text-center">
                    <h2>Best seller<span>shop</span></h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-12">
                <div class="best_product_slider owl-carousel">
                    @if (isset($abc))
                    @foreach ($abc as $item)
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

                    @elseif(isset($product))
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
                    @endif



                </div>
            </div>
        </div>
    </div>
</section>
<!-- product_list part end-->
@endsection

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
 <script src="{{asset('dist/js/stellar.js')}}"></script>
 <script src="{{asset('dist/js/price_rangs.js')}}"></script>
 <!-- custom js -->
 <script src="{{asset('dist/js/custom.js')}}"></script>

@endsection


