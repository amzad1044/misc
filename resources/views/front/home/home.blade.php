@extends('front.master')


  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
   }
  </style>

@section('body')

  <div class="container">
        <div class="carousel slide" data-ride="carousel" data-interval="3000" id="mycaro">
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('front/images/sl1.jpg')}}" class="w-100" height="500px">
            <div class="titleMessage">
                  <div class="heading">
                      <p class="sub typed">Foisal Hossain</p>
                     
                  </div>
            </div>
        </div>
        @foreach($posts as $post)
        <div class="carousel-item">
            <img src="{{asset($post->image)}}" class="w-100" height="500px">
            <div class="titleMessage">
                  <div class="heading">
                      <p class="sub typed">{{$post->title}}</p>
                  </div>
            </div>
        </div>
        @endforeach
      </div>

      <a href="#mycaro" class="carousel-control-prev" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
      <a href="#mycaro" class="carousel-control-next" data-slide="next"><span class="carousel-control-next-icon"></span></a>
    </div>
    </div>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <br>
          <!-- Blog Post -->
            @foreach($posts as $post)
            <div class="card mb-4">
              <img class="card-img-top" src="{{asset($post->image)}}" alt="Card image cap">
              <div class="card-body crdEdit">
                <h2 class="card-title">{{$post->title}}</h2>
                <p class="card-text">{{Str::words(strip_tags($post->editor1),50,'.......')}}</p>
                <a href="{{route('singlePost',['id'=>$post->id,'cat'=>$post->catId,'name'=>$post->tags])}}" class="btn btnedit">Read More &rarr;</a>
              </div>
              <div class="card-footer text-muted">
                Posted on {{$post->created_at->toFormattedDateString()}} by
                <a href="#">Start Bootstrap</a>
              </div>
            </div>
            @endforeach
        <!-- Blog Post -->

          <!-- Pagination -->
          {{$posts->links()}}

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

          
        </div>

      </div>
      </div>

@endsection

