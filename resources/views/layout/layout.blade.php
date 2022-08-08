<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>aranoz</title>
    <link rel="icon" href="{{asset('dist/img/favicon.png')}}">
   @yield('css')


</head>

<body>
  @include('layout.header')

  @yield('main-content')

  @include('layout.footer')
 
@yield('js')

</body>

</html>
