@extends('backend.layouts.app', [
    'class' => '',
    'elementActive' => 'home'
])
@section('content')
<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
             Import Export Excel Product table [formatting of sheets needs to be same as given format ]
        </div>
        <div class="card-body">
            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import Products Data</button>
                <a class="btn btn-warning" href="{{ route('export') }}">Export Products Data</a>
            </form>
        </div>
    </div>
</div>
 @endsection