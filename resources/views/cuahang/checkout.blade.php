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
            <form class="row contact_form" action="{{route('checkout')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-12 form-group p_star">
                <span for="">Tên</span>
                <input type="text" class="form-control" id="first" name="name"  value="{{ !empty(Auth::user()) ? Auth::user()->username :old('name')}}"/>
                    @error('name')
                        <span class="text-danger"> {{$message}}</span>
                    @enderror
              </div>

              <div class="col-md-6 form-group p_star">
                <span for="">Địa chỉ</span>
                <input type="text" class="form-control" id="last" name="address" value="{{ !empty(Auth::user()) ? Auth::user()->address :old('address')}}" />
                @error('address')
                <span class="text-danger"> {{$message}}</span>
            @enderror
              </div>
              <div class="col-md-6 form-group p_star">
                <span for="">Số điện thoại</span>
                <input type="number" class="form-control" id="last" name="phone" value="{{ !empty(Auth::user()) ? Auth::user()->phone :old('phone')}}"  />
                @error('phone')
                <span class="text-danger"> {{$message}}</span>
            @enderror
              </div>

              <button class="btn btn-danger ml-4">Mua hàng</button>

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
