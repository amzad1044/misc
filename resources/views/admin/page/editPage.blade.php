@extends('admin.master')

@section('brd')
	Edit Page
@endsection

@section('body')
	<!-- Update post -->
      
    <div class="card col-md-9">
      {{Form::open(['route'=>'pageUpdate','method'=>'post'])}}
      <div class="card-header">
        <h4 class="card-title">Update Page</h4>
      </div>

      <div class="card-body">
          <div class="form-group">
            <label>Page Title</label>
            <input type="text" name="title" class="form-control" value="{{$page->title}}">
            <input type="hidden" name="id" class="form-control" value="{{$page->id}}">
            <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}</span>
          </div>

          <div class="form-group">
            <label>Post Description</label>
            <textarea name="editor1" class="form-control">
              {{$page->editor1}}
            </textarea>
            <span class="text-danger">{{$errors->has('editor1') ? $errors->first('editor1') : ' '}}</span>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="status" value="1" {{$page->status==1? 'checked':''}}> Published
            </label>
          </div>
        
      </div>
      <br>
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    {{Form::close()}}
    </div>

@endsection