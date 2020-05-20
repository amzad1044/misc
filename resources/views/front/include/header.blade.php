<nav class="navbar navbar-expand-lg fixed-top navEdit">

      <div class="container">
        <a class="navbar-brand brandedt" href="{{route('/')}}">Miscellaneous Blog</a>
        <button class="navbar-toggler toggler-example tglbtnedit" type="button" data-toggle="collapse" data-target="#navbarResponsive"
    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="dark-blue-text"><i
        class="fas fa-bars fa-1x"></i></span>
      </button>

      <div class="text-danger alert" style="margin:0 0;font-size: 19px">{{Session::get('message')}}</div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto uledit">
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('/')}}">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                @foreach($pages as $page)
                <li class="nav-item">
                  <a class="nav-link" href="{{route('pageroute',['id'=>$page->id])}}">{{$page->title}}</a>
                </li>
                @endforeach

                <li class="nav-item">
                  <a class="nav-link" href="{{route('contact')}}">Contact</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#" style="background: none;">
                      {{Session::get('custName')}}
                  </a>
                </li>

           </ul>

            <!-- <div class="dropdown float-right">
              <button class="btn btn-info btn-sm dropdown-toggle" type="button" data-toggle="dropdown">Foisal Hossain
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fas fa-user"></i> Notification</a></li>
                <li><a href="#"><i class="fas fa-power-off"></i> Logout</a></li>
              </ul>
            </div> -->
        </div>
        @if(Session::get('custId'))
        <a href="{{route('custLogout')}}" onclick="event.preventDefault(); document.getElementById('custLogout-form').submit();" class="btn blue-gradient" style="padding:4px 18px;"><i class="fas fa-sign-in-alt"></i> Logout
        </a>
        <form id="custLogout-form" action="{{route('custLogout')}}" method="POST">
            @csrf
        </form>
        @else
          <button onclick="document.getElementById('id01').style.display='block'" class="btn blue-gradient" style="padding:4px 18px;"><i class="fas fa-sign-in-alt"></i> Login</button>
        @endif

            <div id="id01" class="modal" >
                
                  {{Form::open(['route'=>'customerLogin','method'=>'post','class'=>'modal-content animate frmwidth'])}}
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>
                        <img src="{{URL::asset('front/images/img_avatar3.png')}}" alt="Avatar" class="avatar">
                      </div>

                      <div class="container">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="email">
                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>


                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password">
                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
                          
                        <button type="submit" class="btn btn-sm btn-danger">Login</button>
                        <label>
                          <input type="checkbox" checked="checked" name="remember">Remember me
                        </label><br>
                        <label class="float-right">
                          <a href="{{route('signup')}}">sign up</a>
                        </label>
                      </div>
                {{Form::close()}}
             
            </div>
      </div>
    </nav>


<script type="text/javascript">
      window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).fadeUp(1000, function(){
            $(this).remove(); 
        });
    }, 4000);
</script>