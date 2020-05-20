@extends('admin.master')

@section('brd')
	Post
@endsection

@section('body')
	<!-- Update post -->
      
    <div class="card col-md-9">
      {{Form::open(['route'=>'updatePost', 'method'=>'post','enctype'=>'multipart/form-data','name'=>'editPostform'])}}
      <div class="card-header">
        <h4 class="card-title">Edit Post</h4>
      </div>

      <div class="card-body">
        <div class="form-group">
          <label>Post Title</label>
          <input type="text" name="title" class="form-control" value="{{$posts->title}}">
          <input type="hidden" name="id" class="form-control" value="{{$posts->id}}">
          <span id="errorTitle" class="text-danger"></span>
        </div>
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="catId">
            <option>---Select One---</option>
            @foreach($cats as $cat)
            <option value="{{$cat->id}}">{{$cat->catName}}</option>
            @endforeach

          </select>
        </div>
        <div class="form-group">
          <label>Post Description</label>
          <textarea name="editor1" class="form-control" >{{$posts->editor1}}</textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="status" value="1" {{$posts->status==1? 'checked' : ''}}> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" name="tags" class="form-control" value="{{$posts->tags}}">
        </div>
        <div class="">
          <label>Image</label>
          <input type="file" class="form-control" name="image">
          <br>
          <img src="{{asset($posts->image)}}" height="100" width="150">  
        </div>
      </div>
      <br>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    {{Form::close()}}
    </div>

    <script type="text/javascript">
    	document.forms['editPostform'].elements['catId'].value = '{{$posts->catId}}';
    </script>

@endsection