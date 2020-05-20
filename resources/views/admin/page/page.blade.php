@extends('admin.master')

@section('brd')
	Page
@endsection

@section('body')
<div class="col-md-9">
	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Page <span class="badge">0</span></h3>
                <h3 class="text-danger">{{Session::get('message')}}</h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Posts...">
                        </div><br><br>
                      	<div class="col-md-12">
							             <a href="{{route('addPage')}}">Create Page</a>
						            </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover" id="tbl">
                        <tr>
                            <th class="text-center">SL</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($pages as $page)
                        <tr>
                            <td class="text-center">{{$i++}}</td>
                            <td class="text-center">{{$page->title}}</td>
                            <td class="text-center">{{Str::words($page->editor1,10,'..............')}}</td>
                            <td class="text-center">
                                  @if($page->status==1)
                                  <a href="{{route('unpubPage',['id'=>$page->id])}}"><span class="glyphicon glyphicon-ok text-success" aria-hidden="true"></span></a>
                                  @else
                                  <a href="{{route('pubPage',['id'=>$page->id])}}"><span class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></span></a>
                                  @endif
                            </td>
                            <td width="11%" class="text-center">

                              	<a class="text-info" href="{{route('editpage',['id'=>$page->id])}}">
                              		<span><i class="fa fa-pen"></i></span>
                              	</a>||
                              	<a class="text-danger" href="{{route('deletePage',['id'=>$page->id])}}" onclick="return confirm('Are you sure to delete?')" >
                              		<span><i class="fa fa-trash"></i></span>
                              	</a>
                            </td>
                        </tr>
                        @endforeach
                      </table>
                    <!-- Pagination -->
              </div>
    </div>

</div>






@endsection