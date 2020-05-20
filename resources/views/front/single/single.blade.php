@extends('front.master')

@section('body')
<div class="container" style="margin-top:75px">
      <div class="row">
        <div class="col-md-8">
          <br>
          <!-- Blog Post -->
          <div class="card mb-4">

          	<div class="card-header text-muted">
                Posted on {{$post->created_at->toFormattedDateString()}} by
                <a href="#">Start Bootstrap</a>
            </div>
          	
            <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap">
            <div class="card-body crdEdit">
              <h2 class="card-title">{{$post->title}}</h2>
              <p align="justify">{{strip_tags($post->editor1)}}</p>
              

	              <div class="">
		              <p>1 comments <b>Foisal</b></p><hr>

		              <textarea rows="4" cols="50" placeholder="comments.........">
		              	
		              </textarea>
		              <button type="button" class="btn btn-primary" style="margin:0 0 30px 0">Post</button>

              		<div class="text-muted">
  	                	<div class="d-flex w-100 justify-content-between">
  	                  <h5 class="mb-2 h5">Amzad</h5>
  	                  <small>3 days ago</small>
  	                	</div>
  	                	<p class="mb-2">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
              		</div>

		              <div class="text-muted">
  		                <div class="d-flex w-100 justify-content-between">
    		                  <h5 class="mb-2 h5">Hossain</h5>
    		                  <small>3 days ago</small>
  		                </div>
  		                <p class="mb-2">Donec id elit non mi porta gravida at eget metus.</p>
		              </div>

		              <div class="text-muted">
  		                <div class="d-flex w-100 justify-content-between">
  		                  <h5 class="mb-2 h5">Foisal</h5>
  		                  <small>3 days ago</small>
  		                </div>
  		                <p class="mb-2">Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.Donec id elit non mi porta gravida at eget metus.</p>
		              </div>

	              	</div>

	              	<div class="">
  	              		 <section id="breadcrumb">
        					         <ol class="breadcrumb">
        					           <li class="active">Related Post</li>
        					         </ol>
  					           </section>
                       <div class="">
                        @foreach($relatedPosts as $relatedPost)
        					         <a href="{{route('singlePost',['id'=>$relatedPost->id,'cat'=>$relatedPost->catId,'name'=>$relatedPost->tags])}}"><img src="{{asset($relatedPost->image)}}" height="100" width="300"></a>

                           @endforeach
                        </div>
	              	</div>

            </div>
		
            
          </div>
          

         

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

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

          <!-- category -->
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