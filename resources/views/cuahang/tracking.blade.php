@extends('layout.layout')
@section('css');
<link rel="icon" href="{{asset('dist/img/favicon.png')}}">
  <!-- Bootstrap CSS -->
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



  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item">
              <h2>Tracking Order</h2>
              <p>Home <span>-</span> Tracking Order</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Tracking Box Area =================-->
  <section class="tracking_box_area padding_top">
    <div class="container">
      <div class="row align-items-center">
        <!-- <div class="col-lg-6">
              <div class="reacking_box_text text-center h-100">
                <h2>New to our Shop?</h2>
                <p>There are advances being made in science and technology
                  everyday, and a good example of this is the</p>
                  <a href="#" class="btn_2">Create an Account</a>
              </div>
            </div> -->
        <div class="col-lg-12">
          <div class="tracking_box_inner">
            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was
              given
              to you on your receipt and in the confirmation email you should have received.</p>
            <form class="row tracking_form" action="{{route('store.tracking.check')}}" method="get" novalidate="novalidate">
                @csrf
              <div class="col-md-12 form-group">
                <input type="number" class="form-control" id="number" name="phone" >
                @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
              </div>

              <div class="col-md-12 form-group">
                <button type="submit" value="submit" class="btn_3">Track Order</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-12 mt-3">
            <table class="table">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>phone</th>
                        <th>address</th>
                        <th>total</th>
                        <th>quantity</th>
                        <th>status</th>

                    </tr>

                </thead>
                <tbody>
                    @if (isset($order))
                    @foreach ($order as $item)
                    <tr>
                        <td scope="row">{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->phone}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->total}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->status==0 ?'Chờ xử lý':'Đang giao hàng'}}</td>
                    </tr>
                    @endforeach
                    @else <tr>
                        <td>Không có dữ liệu</td>
                    </tr>

                    @endif

                </tbody>
            </table>
        </div>

      </div>

    </div>
  </section>
  <!--================End Tracking Box Area =================-->
@endsection
@section('js')
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
