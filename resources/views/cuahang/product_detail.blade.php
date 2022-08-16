@extends('layout.layout')
@section('css')
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/animate.css')}}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/lightslider.min.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/all.css')}}">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('dist/css/themify-icons.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('dist/css/magnific-popup.css')}}">
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
              <h2>Shop Single</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
          <div class="product_slider_img">
            <div id="vertical">
                @foreach ($image as $item)
                <div data-thumb="{{asset('images/product/'.$item->name)}}">
                    <img src="{{asset('images/product/'.$item->name)}}" />
                  </div>
                @endforeach


            </div>
          </div>
        </div>
        @foreach ($product as $item)
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">

            <h3>{{$item->name}}</h3>


            <h2>{{$item->price}}</h2>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Category</span> :{{$item->category->name}}</a>
              </li>
              <li>
                <a href="#"> <span>Availibility</span> : In Stock</a>
              </li>
            </ul>

            <p>
              {{$item->description}}
            </p>
            <div class="card_area d-flex justify-content-between align-items-center">

              <a href="{{route('addCart',$item->id)}}" class="btn_3">add to cart</a>
              <a href="#" class="like_us"> <i class="ti-heart"></i> </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Description</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Specification</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact"
            aria-selected="false">Comments</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
            aria-selected="false">Reviews</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
          @foreach ($product as $item)
            <p>{{$item->description}}</p>
          @endforeach

        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>Width</h5>
                  </td>
                  <td>
                    <h5>128mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Height</h5>
                  </td>
                  <td>
                    <h5>508mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Depth</h5>
                  </td>
                  <td>
                    <h5>85mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Weight</h5>
                  </td>
                  <td>
                    <h5>52gm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Quality checking</h5>
                  </td>
                  <td>
                    <h5>yes</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Freshness Duration</h5>
                  </td>
                  <td>
                    <h5>03days</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>When packeting</h5>
                  </td>
                  <td>
                    <h5>Without touch of hand</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>Each Box contains</h5>
                  </td>
                  <td>
                    <h5>60pcs</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row">
              <div class="col-lg-6">
                <div class="comment_list">
                  <div class="review_item">
                    <div class="media">
                      <div class="d-flex">
                        <img src="img/product/single-product/review-1.png" alt="" />
                      </div>
                      <div class="media-body">
                        <h4>Blake Ruiz</h4>
                        <h5>12th Feb, 2017 at 05:56 pm</h5>
                        <a class="reply_btn" href="#">Reply</a>
                      </div>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna
                      aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                      ullamco laboris nisi ut aliquip ex ea commodo
                    </p>
                  </div>


                </div>
              </div>
              <div class="col-lg-6">
                <div class="review_box">
                  <h4>Post a comment</h4>
                  <form class="row contact_form" action="{{route('store.comment')}}" method="post" >
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="name" name="product_id"  />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="hidden" class="form-control" id="email" name="user_id" placeholder="Email Address" />
                      </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" name="message" id="message" rows="1"
                          placeholder="Message"></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-right">
                      <button  class="btn_3">
                        Submit Now
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

  <!-- product_list part start-->
  <section class="product_list best_seller">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>Related products  <span>shop</span></h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
          <div class="best_product_slider owl-carousel">
            <div class="single_product_item">
              <img src="{{asset('dist/img/product/product_1.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>
            <div class="single_product_item">
              <img src="{{asset('dist/img/product/product_2.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>
            <div class="single_product_item">
              <img src="{{asset('dist/img/product/product_3.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>
            <div class="single_product_item">
              <img src="{{asset('dist/img/product/product_4.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>
            <div class="single_product_item">
              <img src="{{asset('dist/img/product/product_5.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product_list part end-->
@endsection
@section('js')
  <!-- jquery -->
  <script src="{{asset('dist/js/jquery-1.12.1.min.js')}}"></script>
  <!-- popper js -->
  <script src="{{asset('dist/js/popper.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
  <!-- easing js -->
  <script src="{{asset('dist/js/jquery.magnific-popup.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('dist/js/lightslider.min.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('dist/js/masonry.pkgd.js')}}"></script>
  <!-- particles js -->
  <script src="{{asset('dist/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('dist/js/jquery.nice-select.min.js')}}"></script>
  <!-- slick js -->
  <script src="{{asset('dist/js/slick.min.js')}}"></script>
  <script src="{{asset('dist/js/swiper.jquery.js')}}"></script>
  <script src="{{asset('dist/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('dist/js/waypoints.min.js')}}"></script>
  <script src="{{asset('dist/js/contact.js')}}"></script>
  <script src="{{asset('dist/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('dist/js/jquery.form.js')}}"></script>
  <script src="{{asset('dist/js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('dist/js/mail-script.js')}}"></script>
  <script src="{{asset('dist/js/stellar.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('dist/js/theme.js')}}"></script>
  <script src="{{asset('dist/js/custom.js')}}"></script>
@endsection
