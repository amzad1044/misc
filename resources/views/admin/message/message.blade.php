@extends('admin.master')

@section('body')
	<div class="col-md-9">
	<div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Message <span class="badge">0</span></h3>
                <h3 class="text-danger">{{Session::get('message')}}</h3>
              </div>
              <div class="panel-body">
                  <div class="row">
                        <div class="col-md-12">
                            <input class="form-control" type="text" placeholder="Filter Posts...">
                        </div>
                  </div>
                  <br>
                  <table class="table table-striped table-hover" id="tbl">
                        <tr>
                            <th>SL No.</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Seen</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($contacts as $cont)
                        
                        <tr>
                            <td width="5%">{{$i++}}</td>
                            <td>{{$cont->name}}</td>
                            <td width="10%">{{$cont->email}}</td>
                            <td width="5%">{{$cont->subject}}</td>
                            <td>{{Str::words($cont->body,5)}}</td>
                            <td width="5%">
                                <a href=""><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a>
                            </td>
                            <td>{{$cont->created_at->toDayDateTimeString()}}</td>
                           
                            <td>

                              	<a  href="{{route('singlemessage',['id'=>$cont->id])}}">
                              		View
                              	</a>

                              	<a class="text-danger" href="{{route('deletemsg',['id'=>$cont->id])}}" onclick="return confirm('Are you sure to delete?')" >
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