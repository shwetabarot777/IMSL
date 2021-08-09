<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    @if($product->category != $subcategory->id )
        <option value="{{$subcategory->id}}" @if($product->category == $subcategory->id ) selected @endif >
            {{$dash}}{{$subcategory->title}}
        </option>
    @endif
    @if(count($subcategory->subcategory))
        @include('backend/products/sub-category-list-option-for-update',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach