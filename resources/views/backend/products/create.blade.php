@extends('backend.layouts.app', [
'class' => '',
'elementActive' => 'home'
]);
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
						<li class="breadcrumb-item "><a href="/products">Products</a></li>
						<li class="breadcrumb-item active">Add</li>
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
							<h3 class="card-title"> New Product</h3>
							@if ($message = Session::get('success'))

							<div class="alert alert-success">
								<p>{{ $message }}</p>
							</div>

							@endif
							<div class="pull-right" style="float:right;">
								<a class="btn btn-primary" href="{{ route('products') }}"> Back</a>
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
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<form action="{{ route('admin.products.store') }}" method="POST">
								@csrf
								<div class="row">
									

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<strong>Product Name:</strong>
											<input type="text" class="form-control"  name="product_name" placeholder="product_name"> 
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="form-group">
											<strong>Category :</strong>
											<select type="text" name="parent_id" class="form-control">
                                        <option value="">None</option>
                                        @if($categories)
                                            @foreach($categories as $category)
                                                <?php $dash=''; ?>
                                                <option value="{{$category->id}}">{{$category->title}}</option>
                                                @if(count($category->subcategory))
                                                    @include('backend/category/subCategoryList-option',['subcategories' => $category->subcategory])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>

										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="form-group">
											<strong>Part No :</strong>
											<input type="text" class="form-control"  name="part_no" placeholder="part_no"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="form-group">
											<strong>Board No:</strong>
											<input type="text" class="form-control"  name="board_no" placeholder="board_no"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="form-group">
											<strong>Compatible Model:</strong>
											<input type="text" class="form-control"  name="compatible_model" placeholder="compatible_model"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
											<strong> Selling Price:</strong>
											<input type="text" class="form-control"  name="product_selling_price" placeholder="product_selling_price"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
											<strong>Cost Price:</strong>
											<input type="text" class="form-control"  name="product_cost_price" placeholder="product_cost_price"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
											<strong>Currency Unit:</strong>
											<input type="text" class="form-control"  name="currency_unit" placeholder="currency_unit"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-3">
										<div class="form-group">
											<strong>Product Qty Avail:</strong>
											<input type="text" class="form-control"  name="product_qty_avail" placeholder="product_qty_avail"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="form-group">
											<strong>Product Main Image:</strong>
											<input type="text" class="form-control"  name="product_image1" placeholder="product_image1"> 
										</div>
									</div>

									

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<strong>Amazon Link:</strong>
											<input type="text" class="form-control"  name="amazon_link" placeholder="amazon_link"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<strong>Facebook Link:</strong>
											<input type="text" class="form-control"  name="facebook_link" placeholder="facebook_link"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<strong>Kijiji Link:</strong>
											<input type="text" class="form-control"  name="kijiji_link" placeholder="kijiji_link"> 
										</div>
									</div>

									<div class="col-xs-12 col-sm-12 col-md-12">
										<div class="form-group">
											<strong>Product Desc:</strong>
											<input type="text" class="form-control"  name="product_desc" placeholder="product_desc"> 
										</div>
									</div>

									


									<div class="col-xs-12 col-sm-12 col-md-12 text-center">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</form>

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