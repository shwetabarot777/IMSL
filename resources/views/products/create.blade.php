@extends('layout.mainlayout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Add New Product</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
		</div>
	</div>
</div>
@if ($errors->any())
<div class="alert alert-danger">
	<strong>Warning!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
	@csrf
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">

			<div class="form-group">
				<strong>id:</strong>
				<input type="text" name="id" class="form-control" placeholder="id">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_name:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_name" placeholder="product_name"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>part_no:</strong>
				<input type="text" class="form-control" style="height:150px" name="part_no" placeholder="part_no"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>board_no:</strong>
				<input type="text" class="form-control" style="height:150px" name="board_no" placeholder="board_no"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>compatible_model:</strong>
				<input type="text" class="form-control" style="height:150px" name="compatible_model" placeholder="compatible_model"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_selling_price:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_selling_price" placeholder="product_selling_price"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_cost_price:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_cost_price" placeholder="product_cost_price"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_qty_avail:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_qty_avail" placeholder="product_qty_avail"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_image1:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_image1" placeholder="product_image1"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>currency_unit:</strong>
				<input type="text" class="form-control" style="height:150px" name="currency_unit" placeholder="currency_unit"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>amazon_link:</strong>
				<input type="text" class="form-control" style="height:150px" name="amazon_link" placeholder="amazon_link"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>facebook_link:</strong>
				<input type="text" class="form-control" style="height:150px" name="facebook_link" placeholder="facebook_link"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>kijiji_link:</strong>
				<input type="text" class="form-control" style="height:150px" name="kijiji_link" placeholder="kijiji_link"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_desc:</strong>
				<input type="text" class="form-control" style="height:150px" name="product_desc" placeholder="product_desc"> 
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>timestamps:</strong>
				<input type="text" class="form-control" style="height:150px" name="timestamps" placeholder="timestamps"> 
			</div>
		</div>



		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection