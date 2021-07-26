@extends('layouts.app', [
'class' => '',
'elementActive' => 'home'
])
@push('styles')
<link rel="stylesheet" href="assets/AdminLTE-3.1.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="assets/AdminLTE-3.1.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="assets/AdminLTE-3.1.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


@endpush

@push('scripts')
<script src="assets/AdminLTE-3.1.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/jszip/jszip.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/pdfmake/pdfmake.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/pdfmake/vfs_fonts.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="assets/AdminLTE-3.1.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>


<script type="text/javascript">
  $(function () {
    
    var table = $('#example1').DataTable({
        processing: true,
        serverSide: true,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ],
        ajax: "{{ route('products.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'product_name', name: 'product_name'},
            {data: 'part_no', name: 'part_no'},
            {data: 'board_no', name: 'board_no'},
            {data: 'compatible_model', name: 'compatible_model'},
            {data: 'product_selling_price', name: 'product_selling_price'},
            {data: 'product_cost_price', name: 'product_cost_price'},
            {data: 'product_qty_avail', name: 'product_qty_avail'},
            {data: 'currency_unit', name: 'currency_unit'},
            {data: 'amazon_link', name: 'amazon_link'},
            {data: 'facebook_link', name: 'facebook_link'},
            {data: 'kijiji_link', name: 'kijiji_link'},
            {data: 'product_desc', name: 'product_desc'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });
    
  });
</script>
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

							<table id="example1" class="table table-bordered table-hover" >
								<thead>
									<tr>
										<th>No</th>
										<th>Product Name</th>
										<th>Part No</th>
										<th>Board No</th>
										<th>Compatible Model</th>
										<th>Selling Price</th>
										<th>Cost Price</th>
										<th>Qty avail</th>
										<th>Currency Unit</th>
										<th>Amazon Link</th>
										<th>Facebook Link</th>
										<th>Kijiji Link</th>
										<th>Description</th>
										<th width="280px">Action</th>
									</tr>
								</thead>
								<tbody>
								</tbody>
							</table>
							


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