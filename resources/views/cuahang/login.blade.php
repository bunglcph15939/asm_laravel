@extends('layout.layout')

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
      <!-- breadcrumb start-->
      <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Login</h2>
                            <p>Home <span>-</span> Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--================login_part Area =================-->
    <section class="login_part padding_top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="{{route('dangnhap.register')}}" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                                @if (session()->has('error'))
                                <div class="alert alert-danger">{{ session()->get('error') }}</div>
                            @endif
                            <form class="row contact_form" action="{{route('dangnhap.postlogin')}}" method="post" >
                               @csrf
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control @error('email') is-invalid  @enderror" id="name" name="email" value="{{old('email')}}"
                                        placeholder="email">
                                        @error('email')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control  @error('password') is-invalid  @enderror " id="password" name="password" value="{{old('password')}}"
                                        placeholder="Password">
                                        @error('password')
                                        <span class="text-danger">{{ $message}}</span>
                                    @enderror
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Hiện Mật khẩu</label>
                                    </div>
                                    <button  class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
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

