@extends('admin.master')

@section('brd')
	Post
@endsection

@section('body')
<div class="col-md-9">
	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Post <span class="badge">{{$posts->total()}}</span></h3>
                <h3 class="text-danger">{{Session::get('message')}}</h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Posts...">
                        </div><br><br>
                      	<div class="col-md-12">
							             <a href="button" data-toggle="modal" data-target="#addPage">Add Post</a>
                           <span class="text-danger">{{$errors->has('title') ? $errors->first('title') : ' '}}{{$errors->has('editor1') ? $errors->first('editor1') : ' '}}</span>
						            </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover" id="tbl">
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Tags</th>
                            <th class="text-center">Images</th>
                            <th class="text-center">Created</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @php($i = $posts->perPage() * ($posts->currentPage() - 1))
                        @foreach($posts as $post)
                        @php($i++)
                        <tr>
                            <td width="2%" class="text-center">{{$i}}</td>
                            <td width="20%" class="text-center">{{$post->title}}</td>
                            <td width="10%" class="text-center">{{$post->catName}}</td>
                            <td width="20%" class="text-center">{{Str::words($post->editor1,4)}}</td>
                            <td width="1%" class="text-center">

                                  @if($post->status==1)
                                  <a href="{{route('unpubPost',['id'=>$post->id])}}"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                                  @else
                                  <a href="{{route('pubPost',['id'=>$post->id])}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
                                  @endif
                            </td>
                            <td width="5%" class="text-center">{{$post->tags}}</td>
                            <td class="text-center"><img src="{{asset($post->image)}}" height="50" width="50"></td>
                            <td width="13%" class="text-center">{{Carbon\Carbon::parse($post->created_at)->toFormattedDateString()}}</td>
                            <td width="11%" class="text-center">

                              	<a class="text-info" href="{{route('editPost',['id'=>$post->id])}}">
                              		<span><i class="fa fa-edit"></i></span>
                              	</a>||
                              	<a class="text-danger" href="{{route('deletepost',['id'=>$post->id])}}" onclick="return confirm('Are you sure to delete?')" >
                              		<span><i class="fa fa-trash"></i></span>
                              	</a>
                            </td>
                        </tr>
                        @endforeach
                      </table>
                    <!-- Pagination -->
                    {{$posts->links()}}
              </div>
    </div>

</div>





<!-- Add post -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      {{Form::open(['route'=>'newPost', 'method'=>'post','enctype'=>'multipart/form-data'])}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Post</h4>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label>Post Title</label>
          <input type="text" name="title" class="form-control" placeholder="Page Title">
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
          <textarea name="editor1" class="form-control" placeholder="Description here...."></textarea>

        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="status" value="1"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" name="tags" class="form-control" placeholder="Add Some Tags...">
          <span>{{$errors->has('tags') ? $errors->first('tags') : ' '}}</span>
        </div>
        <div class="">
          <label>Image</label>
          <input type="file" class="form-control" name="image">
          <span>{{$errors->has('image') ? $errors->first('image') : ' '}}</span>
        </div>
        <input type="hidden" name="username" class="form-control" value="{{auth::user()->name}}">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    {{Form::close()}}
    </div>
  </div>

</div>




@endsection