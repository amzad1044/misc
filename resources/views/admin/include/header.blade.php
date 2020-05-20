<nav class="navbar navbar-default fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('/')}}">Go Misc</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="{{route('home')}}">Dashboard</a></li>
				
				<li class="dropdown notification_sms">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-envelope fa-fw"></i>
							<span class="badge hidespan" style="padding: 2px 5px; margin:-18px 0 0 -8px; background: red"><div class="notification"></div></span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							@foreach($contacts as $cont)
							<li>
								<a href="{{route('singlemessage',['id'=>$cont->id])}}">
									<span class="pull-right text-muted">
										<em>{{$cont->created_at->toDayDateTimeString()}}</em>
									</span>
									<div>
										<strong>{{Str::words($cont->name,1,'')}}</strong>
										
									</div>
									<div>{{Str::words($cont->body,5,'..................')}}</div>
									
								</a>
							</li>
							<li class="divider"></li>
							@endforeach
							
							
							<li>
								<a class="text-center" href="{{route('allmessage')}}">
									<strong>Read All Messages</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
				</li>
				<!-- /.dropdown -->
                <li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="fa fa-comment fa-fw"></i>
							<span class="badge" style="padding: 2px 5px; margin:-18px 0 0 -8px; background: red">0</span>
						</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<a href="#">
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet,</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="#">
									<div>
										<strong>John Smith</strong>
										<span class="pull-right text-muted">
											<em>Yesterday</em>
										</span>
									</div>
									<div>Lorem ipsum dolor sit amet, </div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a class="text-center" href="#">
									<strong>Read All Messages</strong>
									<i class="fa fa-angle-right"></i>
								</a>
							</li>
						</ul>
						<!-- /.dropdown-messages -->
				</li>
			</ul>
		  
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">{{auth::user()->name}}</a></li>
            <li>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard <small>Manage Your Site</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <a href="{{route('register')}}" class="btn btn-default" type="button" id="" data-toggle="" aria-haspopup="true" aria-expanded="true">
                Create User
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
          @yield('brd')
        </ol>
      </div>
    </section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $.ajax({
        url: '/notification/',
        type: "get",
        success: function(data) {
            console.log(data);
            if(data>0){
            	$('.notification').html(data);
            }else{
				$(".hidespan").hide();
            }
        }
    });

    $('.notification_sms').click(function() {
	    $.ajax({
	        url: '/notification_update/',
	        type: "get",
	        success: function(data) {
	            console.log(data);
	            if(data>0){
	            	$('.notification').html(data);
	            }else{
					$(".hidespan").hide();
	            }
	        }
	    });  	
    });

});
</script>

