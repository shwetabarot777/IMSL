@extends('forms.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2> Show form</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('forms.index') }}"> Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>display_name:</strong>
			{{ $forms->display_name }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>db_table_name:</strong>
			{{ $forms->db_table_name }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>form_desc:</strong>
			{{ $forms->form_desc }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>order_in_sidebar:</strong>
			{{ $forms->order_in_sidebar }}
		</div>
	</div>
</div>
@endsection