<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function create(Request $request)
    {
        $categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();
        if($request->method()=='GET')
        {
            return view('backend/category/create-category', compact('categories'));
        }
        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'title'      => 'required',
                'slug'      => 'required|unique:categories',
                'parent_id' => 'nullable|numeric'
            ]);

            Category::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'parent_id' =>$request->parent_id
            ]);

            return redirect()->back()->with('success', 'Category has been created successfully.');
        }
    }
    public function allCategories()
{
    $categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();
    return view('backend/category/all-category', compact('categories'));
}
   
    public function editCategory($id, Request $request)
    {
        $category = Category::findOrFail($id);
        if($request->method()=='GET')
        {
            $categories = Category::where('parent_id', null)->where('id', '!=', $category->id)->orderby('title', 'asc')->get();
            return view('backend/category/edit-category', compact('category', 'categories'));
        }

        if($request->method()=='POST')
        {
            $validator = $request->validate([
                'title'     => 'required',
                'slug' => ['required', Rule::unique('categories')->ignore($category->id)],
                'parent_id'=> 'nullable|numeric'
            ]);
            if($request->title != $category->title || $request->parent_id != $category->parent_id)
            {
                if(isset($request->parent_id))
                {
                    $checkDuplicate = Category::where('title', $request->title)->where('parent_id', $request->parent_id)->first();
                    if($checkDuplicate)
                    {
                        return redirect()->back()->with('error', 'Category already exist in this parent.');
                    }
                }
                else
                {
                    $checkDuplicate = Category::where('title', $request->title)->where('parent_id', null)->first();
                    if($checkDuplicate)
                    {
                        return redirect()->back()->with('error', 'Category already exist with this name.');
                    }
                }
            }

            $category->title = $request->title;
            $category->parent_id = $request->parent_id;
            $category->slug = $request->slug;
            $category->save();
            return redirect()->back()->with('success', 'Category has been updated successfully.');
        }
    }
    public function deleteCategory($id)
{
    $category = Category::findOrFail($id);
    if(count($category->subcategory))
    {
        $subcategories = $category->subcategory;
        foreach($subcategories as $cat)
        {
            $cat = Category::findOrFail($cat->id);
            $cat->parent_id = null;
            $cat->save();
        }
    }
    $category->delete();
    return redirect()->back()->with('delete', 'Category has been deleted successfully.');
}
}
