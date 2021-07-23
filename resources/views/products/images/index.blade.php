@extends('layout.mainlayout')

@section('content')

<div class="row">

	<div class="col-lg-12 margin-tb">

		<div class="pull-left">
			<h2> <!--  {{ $product->product_name }}  -->Images List</h2>
		</div>
		
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('products.images.create') }}"> Upload new Image</a>
		</div>
	</div>
</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">
	<p>{{ $message }}</p>
</div>

@endif

<?php


$path='images/'.$p_id;
?>

@foreach(File::glob(public_path($path).'/*') as $path)
   <img src="{{ str_replace(public_path(), '', $path) }}">
@endforeach


@endsection

<b></b>