@extends('front.master')

@section('body')
<div class="container">
        <!--Section: Contact v.2-->
	<section class="mb-4" style=" padding: 85px 6px;">

		
	    <!--Section heading-->
	    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
	    <!--Section description-->
	    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
	        a matter of hours to help you.</p>

	        <!-- alert -->
		<div class="alert alert-success">
		  	{{Session::get('msg')}}
		</div>

	    <div class="row">

	        <!--Grid column-->

	        @if(Session::get('custId'))
	        <div class="col-md-9 mb-md-0 mb-5">
	            <form id="contact-form" name="contact-form" action="{{route('contactsend')}}" method="post">
	            	@csrf

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="name" name="name" class="form-control">
	                            <label for="name" class="">Your name</label>
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                    <!--Grid column-->
	                    <div class="col-md-6">
	                        <div class="md-form mb-0">
	                            <input type="text" id="email" name="email" class="form-control" value="{{Session::get('custEmail')}}">
	                            <label for="email" class="">Your email</label>
	                        </div>
	                    </div>
	                    <!--Grid column-->

	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="md-form mb-0">
	                            <input type="text" id="subject" name="subject" class="form-control">
	                            <label for="subject" class="">Subject</label>
	                        </div>
	                    </div>
	                </div>
	                <!--Grid row-->

	                <!--Grid row-->
	                <div class="row">

	                    <!--Grid column-->
	                    <div class="col-md-12">

	                        <div class="md-form">
	                            <textarea type="text" id="message" name="body" rows="5" class="form-control md-textarea"></textarea>
	                            <label for="message">Your message</label>
	                        </div>

	                    </div>
	                </div>
	                <!--Grid row-->

	            

	            <div class="text-center text-md-left">
	                <button href="" id="btn" class="btn btn-danger" type="submit">Send</button>
	            </div>
	            <div class="status"></div>
	            </form>
	        </div>

	        <!--Grid column-->

	        <!--Grid column-->
	        <div class="col-md-3 text-center">
	            <ul class="list-unstyled mb-0">
	                <li><i class="fas fa-map-marker-alt fa-2x"></i>
	                    <p>San Francisco, CA 94126, USA</p>
	                </li>

	                <li><i class="fas fa-phone mt-4 fa-2x"></i>
	                    <p>+ 01 234 567 89</p>
	                </li>

	                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
	                    <p>contact@mdbootstrap.com</p>
	                </li>
	            </ul>
	        </div>
	        <!--Grid column-->

	        @else
	        	<h2 class="text-danger text-center">Login in first!!!!</h2>
	        @endif

	    </div>

	</section>
<!--Section: Contact v.2-->
</div>

<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
			window.setTimeout(function() {
		    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
		        $(this).remove(); 
		    });
		}, 4000);
</script>
@endsection