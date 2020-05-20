@extends('admin.master')

@section('brd')
	Category
@endsection

@section('body')
<div class="col-md-9">
	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Category <span class="badge">{{$categories->total()}}</span></h3>
                <h3 class="text-danger">{{Session::get('message')}}</h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Posts...">
                        </div><br><br>
                      	<div class="col-md-12">
							             <a href="{{route('addCategory')}}" type="submit" name="btn" class="btn btn-primary btn-sm" value="Add Product">Add Category</a>
						            </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover" id="tbl">
                        <tr>
                            <th>SL No.</th>
                            <th>Category</th>
                            <th>Published</th>
                            <th>Created</th>
                            <th>Action</th>
                        </tr>

                        @php($i = $categories->perPage() * ($categories->currentPage() - 1))
                        @foreach($categories as $category)

                        <tr>
                            <td>@php($i++){{$i}}</td>
                            <td>{{$category->catName}}</td>
                            <td>
                                @if($category->status==1)
                                  <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                @else
                                  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                @endif
                            </td>
                            <td>{{$category->created_at->toFormattedDateString()}}</td>
                            <!-- <td>{{$category->created_at->diffForHumans()}}</td> -->
                            <!-- <td>{{$category->created_at->toDayDateTimeString()}}</td> -->
                            <td>
                                @if($category->status==1)
                              	<a class="btn btn-sm btn-success" href="{{route('unpubCat',['id'=>$category->id])}}">
                              		<span><i class="fa fa-arrow-up"></i></span>
                              	</a>
                                @else
                                <a class="btn btn-sm btn-warning" href="{{route('pubCat',['id'=>$category->id])}}">
                                  <span><i class="fa fa-arrow-down"></i></span>
                                </a>
                                @endif

                              	<a class="btn btn-sm btn-info" href="{{route('editCat',['id'=>$category->id])}}">
                              		<span><i class="fa fa-edit"></i></span>
                              	</a>

                                
                              	<a class="btn btn-sm btn-danger" href="{{route('deleteCat',['id'=>$category->id])}}" onclick="return confirm('Are you sure to delete?')" >
                              		<span><i class="fa fa-trash"></i></span>
                              	</a>
                                


                            </td>
                        </tr>
                       @endforeach
                      </table>
                    <!-- Pagination -->
                    {{$categories->links()}}
              </div>
    </div>

</div>

@endsection