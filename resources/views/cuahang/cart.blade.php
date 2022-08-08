@extends('layout.layout')
@section('css')
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
              <h2>Cart Products</h2>
              <p>Home <span>-</span>Cart Products</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!--================Cart Area =================-->
  <section class="cart_area padding_top">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Price</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{asset('dist/img/product/single-product/cart-1.jpg')}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{asset('dist/img/product/single-product/cart-1.jpg')}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <!-- <input type="text" value="1" min="0" max="10" title="Quantity:"
                      class="input-text qty input-number" />
                    <button
                      class="increase input-number-increment items-count" type="button">
                      <i class="ti-angle-up"></i>
                    </button>
                    <button
                      class="reduced input-number-decrement items-count" type="button">
                      <i class="ti-angle-down"></i>
                    </button> -->
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="{{asset('dist/img/product/single-product/cart-1.jpg')}}" alt="" />
                    </div>
                    <div class="media-body">
                      <p>Minimalistic shop for multipurpose use</p>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>$360.00</h5>
                </td>
                <td>
                  <div class="product_count">
                    <span class="input-number-decrement"> <i class="ti-angle-down"></i></span>
                    <input class="input-number" type="text" value="1" min="0" max="10">
                    <span class="input-number-increment"> <i class="ti-angle-up"></i></span>
                  </div>
                </td>
                <td>
                  <h5>$720.00</h5>
                </td>
              </tr>
              <tr class="bottom_button">
                <td>
                  <a class="btn_1" href="#">Update Cart</a>
                </td>
                <td></td>
                <td></td>
                <td>
                  <div class="cupon_text float-right">
                    <a class="btn_1" href="#">Close Coupon</a>
                  </div>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <h5>Subtotal</h5>
                </td>
                <td>
                  <h5>$2160.00</h5>
                </td>
              </tr>

            </tbody>
          </table>
          <div class="checkout_btn_inner float-right">
            <a class="btn_1" href="#">Continue Shopping</a>
            <a class="btn_1 checkout_btn_1" href="{{route('store.checkout')}}">Proceed to checkout</a>
          </div>
        </div>
      </div>
  </section>
  <!--================End Cart Area =================-->

@endsection

@section('js')
   <!-- jquery plugins here-->
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
