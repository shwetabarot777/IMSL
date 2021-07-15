@extends('forms.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit Form</h2>
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
<form action="{{ route('forms.update',$forms->id) }}" method="POST">
	@csrf
	@method('PUT')
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>display_name:</strong>
				<input type="text" name="display_name" value="{{ $forms->display_name }}" class="form-control" placeholder="display_name">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>db_table_name:</strong>
				<input type="text" class="form-control" style="height:150px" name="db_table_name" placeholder="db_table_name">
				{{ $forms->db_table_name }}</input>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>form_desc:</strong>
				<input type="text" class="form-control" style="height:150px" name="form_desc" placeholder="form_desc">
				{{ $forms->form_desc }}</input>
			</div>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>order_in_sidebar:</strong>
				<input type="text" class="form-control" style="height:150px" name="order_in_sidebar" placeholder="order_in_sidebar">
				{{ $forms->order_in_sidebar }}</input>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection