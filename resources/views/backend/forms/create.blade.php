@extends('forms.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add New form</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>
		</div>
	</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<form action="{{ route('forms.store') }}" method="POST">
	@csrf
	<div class="row">
	
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>display_name:</strong>
				<input type="text" name="display_name" class="form-control" placeholder="display_name">
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>db_table_name:</strong>
				<input type="text" class="form-control" style="height:100px" name="db_table_name" placeholder="db_table_name">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>form_desc:</strong>
				<input type="text" class="form-control" style="height:100px" name="form_desc" placeholder="form_desc">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>order_in_sidebar:</strong>
				<input type="text" class="form-control" style="height:100px" name="order_in_sidebar" placeholder="order_in_sidebar">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection
