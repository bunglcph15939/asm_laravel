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
      <!--================Home Banner Area =================-->
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Producta Checkout</h2>
              <p>Home <span>-</span> Shop Single</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Checkout Area =================-->
  <section class="checkout_area padding_top">
    <div class="container">


      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h3>Billing Details</h3>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="first" name="name" />
                <span class="placeholder" data-placeholder="First name"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="last" name="name" />
                <span class="placeholder" data-placeholder="Last name"></span>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="company" name="company" placeholder="Company name" />
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Phone number"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="compemailany" />
                <span class="placeholder" data-placeholder="Email Address"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">Country</option>
                  <option value="2">Country</option>
                  <option value="4">Country</option>
                </select>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add1" name="add1" />
                <span class="placeholder" data-placeholder="Address line 01"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="add2" name="add2" />
                <span class="placeholder" data-placeholder="Address line 02"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="city" name="city" />
                <span class="placeholder" data-placeholder="Town/City"></span>
              </div>
              <div class="col-md-12 form-group p_star">
                <select class="country_select">
                  <option value="1">District</option>
                  <option value="2">District</option>
                  <option value="4">District</option>
                </select>
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode/ZIP" />
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" id="f-option2" name="selector" />
                  <label for="f-option2">Create an account?</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <h3>Shipping Details</h3>
                  <input type="checkbox" id="f-option3" name="selector" />
                  <label for="f-option3">Ship to a different address?</label>
                </div>
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>
            </form>
          </div>
          <div class="col-lg-4">
            <div class="order_box">
              <h2>Your Order</h2>
              <ul class="list">
                <li>
                  <a href="#">Product
                    <span>Total</span>
                  </a>
                </li>
                @if (! empty(Session::get('Cart')->products))
                @foreach (Session::get('Cart')->products as $item)
                <li>
                    <a href="#">{{$item['productInfor']->name}}
                      <span class="middle">x {{$item['quanty']}} </span>
                      <span class="last">{{$item['price']}}</span>
                    </a>
                  </li>
                @endforeach
                @endif


              </ul>
              <ul class="list list_2">


                <li>

                  <a href="#">Total
                    @if (isset(Session::get('Cart')->totalPrice))
                    <span>${{Session::get('Cart')->totalPrice}}</span>
                        @else <span>$0</span>
                        @endif

                  </a>
                </li>
              </ul>


              <div class="creat_account">
                <input type="checkbox" id="f-option4" name="selector" />
                <label for="f-option4">I’ve read and accept the </label>
                <a href="#">terms & conditions*</a>
              </div>
              <a class="btn_3" href="#">Proceed to Paypal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

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
 <script src="{{asset('dist/s/contact.js')}}j"></script>
 <script src="{{asset('dist/js/jquery.ajaxchimp.min.js')}}"></script>
 <script src="{{asset('dist/js/jquery.form.js')}}"></script>
 <script src="{{asset('dist/js/jquery.validate.min.js')}}"></script>
 <script src="{{asset('dist/js/mail-script.js')}}"></script>
 <script src="{{asset('dist/js/stellar.js')}}"></script>
 <script src="{{asset('dist/js/price_rangs.js')}}"></script>
 <!-- custom js -->
 <script src="{{asset('dist/js/custom.js')}}"></script>

@endsection
