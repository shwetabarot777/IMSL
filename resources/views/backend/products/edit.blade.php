@extends('backend.layouts.app', [
    'class' => '',
    'elementActive' => 'home'
])
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit Product</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
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
<form action="{{ route('products.update',$product->id) }}" method="POST">
	@csrf
	@method('PUT')
	<div class="row">
		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_name:</strong>
				<input type="text" name="product_name" value="{{ $product->name }}" class="form-control" placeholder="product_name">
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>part_no:</strong>
				<textarea class="form-control" style="height:150px" name="part_no" placeholder="part_no">{{ $product->part_no }}</textarea>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>board_no:</strong>
				<textarea class="form-control" style="height:150px" name="board_no" placeholder="board_no">{{ $product->board_no }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>compatible_model:</strong>
				<textarea class="form-control" style="height:150px" name="compatible_model" placeholder="compatible_model">{{ $product->compatible_model }}</textarea>
			</div>
		</div>

		
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_selling_price:</strong>
				<textarea class="form-control" style="height:150px" name="product_selling_price" placeholder="product_selling_price">{{ $product->product_selling_price }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_cost_price:</strong>
				<textarea class="form-control" style="height:150px" name="product_cost_price" placeholder="product_cost_price">{{ $product->product_cost_price }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_qty_avail:</strong>
				<textarea class="form-control" style="height:150px" name="product_qty_avail" placeholder="product_qty_avail">{{ $product->product_qty_avail }}</textarea>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_image1:</strong>
				<textarea class="form-control" style="height:150px" name="product_image1" placeholder="product_image1">{{ $product->product_image1 }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>currency_unit:</strong>
				<textarea class="form-control" style="height:150px" name="currency_unit" placeholder="currency_unit">{{ $product->currency_unit }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>amazon_link:</strong>
				<textarea class="form-control" style="height:150px" name="amazon_link" placeholder="amazon_link">{{ $product->amazon_link }}</textarea>
			</div>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>facebook_link:</strong>
				<textarea class="form-control" style="height:150px" name="facebook_link" placeholder="facebook_link">{{ $product->facebook_link }}</textarea>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>kijiji_link:</strong>
				<textarea class="form-control" style="height:150px" name="kijiji_link" placeholder="kijiji_link">{{ $product->kijiji_link }}</textarea>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>product_desc:</strong>
				<textarea class="form-control" style="height:150px" name="product_desc" placeholder="product_desc">{{ $product->product_desc }}</textarea>
			</div>
		</div>

		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>timestamps:</strong>
				<textarea class="form-control" style="height:150px" name="timestamps" placeholder="timestamps">{{ $product->timestamps }}</textarea>
			</div>
		</div>


		<div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</form>
@endsection