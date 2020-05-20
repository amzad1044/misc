@extends('admin.master')

@section('brd')
	Category
@endsection

@section('body')
	<div class="col-lg-8">
		<div class="card">
			<div class="card-header">
				<strong>Add Category </strong>
			</div>
			{{Form::open(['route'=>'addCat', 'method'=>'post','class'=> 'form-horizontal'])}}
			<div class="card-body card-block">
				<div class="form-group row">
						<label class="control-label col-md-3">Category Name</label>
						<div class="col-md-9">
							{{Form::text('catName','',['class'=>'form-control'])}}
							<span class="text-danger">{{$errors->has('catName') ? $errors->first('catName') : ' '}}</span>
						</div>
				</div>
				<div class="form-group row">
						<label class="control-label col-md-3">Status</label>
						<div class="col-md-9">
							
							{{Form::checkbox('status',1,['class'=>'form-control'])}}
						</div>
				</div>
				<div class="form-group row">		
					<div class="col-md-12 ">
						<input type="submit" name="btn" class="btn btn-primary" value="Add Category">
					</div>
				</div>
			</div>
			
	   		{{Form::close()}}
		</div>

	</div>

@endsection