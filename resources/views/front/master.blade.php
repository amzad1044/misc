<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Miscellaneous Blog</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{URL::asset('front/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('front/css/style.css')}}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include('front.include.header')


<!-- slider -->
    @yield('body')



    @include('front.include.footer')
    <a href="javascript:" id="return-to-top"><i class="fas fa-chevron-up"></i></a>

    

    <script src="{{URL::asset('front/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('front/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('front/js/style.js')}}"></script>
  </body>

</html>
