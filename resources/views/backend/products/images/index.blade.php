@extends('backend.layouts.app', [
'class' => '',
'elementActive' => 'home'
])
@push('styles')
@endpush

@push('scripts')
@endpush

@section('content')


<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Products</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Products</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Products List</h3>
							@if ($message = Session::get('success'))

							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>

							@endif
						</div>
						<!-- /.card-header -->
						<div class="card-body">

								
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




						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
					<!-- /.col -->
				</div>
				<!-- /.row -->
			</div>
			<!-- /.container-fluid -->
		</section>
		<!-- /.content -->
	</div>






@endsection

<b></b>