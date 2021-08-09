<?php $dash.='-- '; ?>
@foreach($subcategories as $subcategory)
    <?php $_SESSION['i']=$_SESSION['i']+1; ?>
    <tr>
        <td>{{$_SESSION['i']}}</td>
        <td>{{$dash}}{{$subcategory->title}}</td>
        <td>{{$subcategory->slug}}</td>
        <td>{{$subcategory->parent->title}}</td>
           <td>                                  
                                        <a href="{{Route('admin.categories.edit', $subcategory->id)}}">
                                            <button class="btn btn-sm btn-info">Edit</button>
                                        </a>
                                        <a href="{{Route('admin.categories.delete', $subcategory->id)}}">
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </a>
                                    </td>
    </tr>
    @if(count($subcategory->subcategory))
        @include('backend/category/sub-category-list',['subcategories' => $subcategory->subcategory])
    @endif
@endforeach