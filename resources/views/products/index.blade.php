@extends('layout.mainlayout')

@section('content')

<div class="row">

	<div class="col-lg-12 margin-tb">

		<div class="pull-left">
			<h2>Laravel 8 CRUD Example from scratch</h2>
		</div>

		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>

@endif
<table class="table table-bordered">
	<tr>
		<th>id</th>
		<th>product_name</th>
		<th>part_no</th>
		<th>board_no</th>
		<th>compatible_model</th>
		<th>product_selling_price</th>
		<th>product_cost_price</th>
		<th>product_qty_avail</th>
		<th>product_image1</th>
		<th>currency_unit</th>
		<th>amazon_link</th>
		<th>facebook_link</th>
		<th>kijiji_link</th>
		<th>product_desc</th>
		

		<th width="280px">Action</th>
	</tr>
	@foreach ($products as $product)
	<tr>
		<td>{{ ++$i }}</td>

		<td>{{ $product->product_name }}</td>
		<td>{{ $product->part_no }}</td>
		<td>{{ $product->board_no }}</td>
		<td>{{ $product->compatible_model }}</td>
		<td>{{ $product->product_selling_price }}</td>
		<td>{{ $product->product_cost_price }}</td>
		<td>{{ $product->product_qty_avail }}</td>
		<td>{{ $product->product_image1 }}</td>
		<td>{{ $product->currency_unit }}</td>
		<td>{{ $product->amazon_link }}</td>
		<td>{{ $product->facebook_link }}</td>
		<td>{{ $product->kijiji_link }}</td>
		<td>{{ $product->product_desc }}</td>
		
		<td>
			<form action="{{ route('products.destroy',$product->id) }}" method="POST">
				<a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>
				<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
{!! $products->links() !!}
@endsection

<b></b>