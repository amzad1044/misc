@extends('admin.master')

@section('body')
	<div class="card col-md-9">
      {{Form::open(['route'=>'replymsg','method'=>'post'])}}
      <div class="card-header">
        <h3 class="card-title text-success" id="alert" >{{Session::get('msg')}}</h3>
      </div>

      <div class="card-body">
	      	<div class="jumbotron">
			  <h1 class="display-4">{{$contact->name}}</h1>
			  <p class="lead">{{$contact->body}}</p>
			  <hr class="my-4">
			  <p><b>From</b> {{$contact->email}}</p>
			</div>
          <div class="form-group">
            <input type="hidden" name="name" class="form-control" value="{{$contact->name}}">
            <input type="hidden" name="subject" class="form-control" value="{{$contact->email}}">
            <input type="hidden" name="frommail" class="form-control" value="{{$contact->email}}">
          </div>


          <div class="form-group">
            <label>Reply</label>
            <textarea name="editor1" class="form-control"></textarea>
            <span class="text-danger">{{$errors->has('editor1') ? $errors->first('editor1') : ' '}}</span>
          </div>
        
      </div>
      <br>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Reply</button>
      </div>
    {{Form::close()}}
    </div>


<script
  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
  crossorigin="anonymous"></script>
<script type="text/javascript">
      window.setTimeout(function() {
        $("#alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove(); 
        });
    }, 4000);
</script>
@endsection