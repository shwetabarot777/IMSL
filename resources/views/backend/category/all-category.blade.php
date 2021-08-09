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
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item "><a href="{{ route('admin.categories.index') }}">Categories</a></li>
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
                            <h3 class="card-title">Category List</h3>
                            @if ($message = Session::get('success'))

                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>

                            @endif
                            <div class="pull-right" style="float:right;">
                                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}"> Add Category</a>
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
                        <div class="card-body"><section class="content" style="padding:50px 20%;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                           
                                        </div>
                                        <div class="box-body">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>S.No.</th>
                                                        <th>Category Name</th>
                                                        <th>Category Slug</th>
                                                        <th>Parent Category</th>
                                                          <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($categories))
                                                    <?php $_SESSION['i'] = 0; ?>
                                                    @foreach($categories as $category)
                                                    <?php $_SESSION['i']=$_SESSION['i']+1; ?>
                                                    <tr>
                                                        <?php $dash=''; ?>
                                                        <td>{{$_SESSION['i']}}</td>
                                                        <td>{{$category->title}}</td>
                                                        <td>{{$category->slug}}</td>
                                                        <td>
                                                            @if(isset($category->parent_id))
                                                            {{$category->subcategory->title}}
                                                            @else
                                                            None
                                                            @endif
                                                        </td>
                                                        <td>
                                                          <?php  $editUrl = route('admin.categories.edit', $category->id);   ?>                               
                                        <a href="{{ route('admin.categories.edit', $category->id);}}">
                                            <button class="btn btn-sm btn-info">Edit</button>
                                        </a>
                                         <a href="{{ route('admin.categories.delete', $category->id);}}">
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                    </td>
                                                    </tr>
                                                    @if(count($category->subcategory))
                                                    @include('backend.category.sub-category-list',['subcategories' => $category->subcategory])
                                                    @endif

                                                    @endforeach
                                                    <?php unset($_SESSION['i']); ?>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection