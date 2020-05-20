<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">


    <!-- <link href="{{asset('/')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/css/style.css" rel="stylesheet"> -->

    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>



  <body>

    @include('admin.include.header')

    <section id="main">
      <div class="container">
        <div class="row">
          <!-- col-3 sidebar -->
          @include('admin.include.sidebar')

          <!-- col-9 body -->
          @yield('body')

        </div>
      </div>
    </section>

    @include('admin.include.footer')

    <!-- Modals -->

    <!-- Add Page -->
    

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{URL::asset('admin/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>

    <!-- <script src="{{asset('/')}}/admin/js/jquery-3.4.1.min.js"></script>
    <script src="{{asset('/')}}/admin/js/bootstrap.min.js"></script> -->
  </body>
</html>
