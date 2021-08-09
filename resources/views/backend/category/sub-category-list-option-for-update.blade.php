<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    @if($category->id != $subcategory->id )
        <option value="{{$subcategory->id}}" @if($category->parent_id == $subcategory->id ) selected @endif >
        	{{$dash}}{{$subcategory->title}}
        </option>
    @endif
    @if(count($subcategory->subcategory))
        @include('backend/category/sub-category-list-option-for-update',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach