@extends('backend.layouts.app', [
'class' => '',
'elementActive' => 'home'
]);
@push('styles')

@endpush

@push('scripts')

@endpush

@section('content')
<section class="content" style="padding:50px 30%;">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Edit Category</h3>
                </div>
            
                <form role="form" method="post">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category name*</label>
                                    <input type="text" name="title" class="form-control" placeholder="Category name" value="{{$category->title}}" required />
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Category slug*</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Category slug" value="{{$category->slug}}" required />
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Select parent category*</label>
                                    <select type="text" name="parent_id" class="form-control">
                                        <option value="">None</option>
                                        @if($categories)
                                            @foreach($categories as $item)
                                                <?php $dash=''; ?>
                                                <option value="{{$item->id}}" @if($category->parent_id == $item->id ) selected @endif>{{$item->title}}</option>
                                                @if(count($item->subcategory))
                                                    @include('backend/category/sub-category-list-option-for-update',['subcategories' => $item->subcategory])
                                                @endif
                                            @endforeach
                                        @endif
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>

                    </div>

                </form>
                @if ($errors->any())
                    <div>
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                @if(\Session::has('error'))
                    <div>
                        <li class="alert alert-danger">{!! \Session::get('error') !!}</li>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div>
                        <li class="alert alert-success">{!! \Session::get('success') !!}</li>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection