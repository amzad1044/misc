<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('admin/css/style.css')}}" rel="stylesheet">

<!--     <link href="{{asset('/')}}/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}/admin/css/style.css" rel="stylesheet"> -->
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="{{route('/')}}">Misc</a>
          
        </div>

      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form id="login" method="POST" action="" class="well">
              @csrf
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email" value="{{ old('email') }}" autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-default btn-block">Login</button>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{URL::asset('admin/js/bootstrap.min.js')}}"></script>

<!--     <script src="{{asset('/')}}/admin/js/bootstrap.min.js"></script> -->
  </body>
</html>
