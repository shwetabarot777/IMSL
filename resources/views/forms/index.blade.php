@extends('forms.layout')
@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 8 CRUD Example from scratch</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('forms.create') }}"> Create New form</a>
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
		<th>no</th>
		<th>display_name</th>
		<th>db_table_name</th>
		<th>form_desc</th>
		<th>order_in_sidebar</th>

		<th width="280px">Action</th>
	</tr>
	@foreach ($forms as $forms)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $forms->display_name }}</td>
		<td>{{ $forms->db_table_name }}</td>
		<td>{{ $forms->form_desc }}</td>
		<td>{{ $forms->order_in_sidebar }}</td>
		<td>
			<form action="{{ route(' forms.destroy',$forms->id) }}" method="POST">
				<a class="btn btn-info" href="{{ route(' forms.show',$forms->id) }}">Show</a>
				<a class="btn btn-primary" href="{{ route(' forms.edit',$forms->id) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</table>
{!! $forms->links() !!}
@endsection