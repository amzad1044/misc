@extends('front.master')

@section('body')
<div class="container">
	<div class="row">
		<div class="col-md-8">
			<br><br><br><br><br>
			<div class="card mb-4">
			      <div class="card-body crdEdit">
			        <h2 class="card-title">{{$page->title}}</h2>
			        <p class="card-text">{{strip_tags($page->editor1)}}</p>
			        
			      </div>
		    </div>
		</div>

		<div class="col-md-4">
				<br><br><br><br>
          <!-- Search Widget -->
          <div class="card my-3">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
              <!-- Material input -->
              <div class="md-form">
                <input type="text" id="form1" class="form-control">
                <label for="form1">Type....</label>
                <span class="input-group-btn">
                  <button class="btn btnSrc" type="button">Go!</button>
                </span>
              </div>
            </div>
          </div>

          <!-- Category --> 
          @include('front.include.sideCat')

          <!-- Categories Widget -->
          <div class="my-3">
            <div class="list-group listedit">
              <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-2 h5">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                  blandit.</p>
                <small>Donec id elit non mi porta.</small>
              </a>

              <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-2 h5">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                  blandit.</p>
                <small>Donec id elit non mi porta.</small>
              </a>

              <a href="#!" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-2 h5">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius
                  blandit.</p>
                <small>Donec id elit non mi porta.</small>
              </a>
              
            </div>
          </div>

          <!-- Side Widget -->

          <div class="card my-3">
            <h5 class="card-header">Blog Video</h5>
            <div class="card-body">
              <video width="100%" controls>
                <source src="video.MP4" type="video/mp4">
                Your browser does not support HTML5 video.
              </video>
            </div>
              <div class="card-footer">
                <p>
              Video courtesy of 
              <a href="https://www.bigbuckbunny.org/" target="_blank">Big Buck Bunny</a>.
              </p>
              </div>
          </div>
		</div>
	</div>
</div>
	
@endsection