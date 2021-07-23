@extends('layout.mainlayout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2> Show Product</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_name:</strong>
			{{ $product->product_name }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>part_no:</strong>
			{{ $product->part_no }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>board_no:</strong>
			{{ $product->board_no }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>compatible_model:</strong>
			{{ $product->compatible_model }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_selling_price:</strong>
			{{ $product->product_selling_price }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_cost_price:</strong>
			{{ $product->product_cost_price }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_qty_avail:</strong>
			{{ $product->product_qty_avail }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_image1:</strong>
			{{ $product->product_image1 }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>currency_unit:</strong>
			{{ $product->currency_unit }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>amazon_link:</strong>
			{{ $product->amazon_link }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>facebook_link:</strong>
			{{ $product->facebook_link }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>kijiji_link:</strong>
			{{ $product->kijiji_link }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>product_desc:</strong>
			{{ $product->product_desc }}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>timestamps:</strong>
			{{ $product->timestamps }}
		</div>
	</div>

</div>
@endsection