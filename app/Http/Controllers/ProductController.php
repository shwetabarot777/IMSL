<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
return view('products.index',compact('products'))
->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        //'id' => 'required',
        'product_name' => 'required',
        // 'part_no' => 'required',
        // 'board_no' => 'required',
        // 'compatible_model' => 'required',
        // 'product_selling_price' => 'required',
        // 'product_cost_price' => 'required',
        // 'product_qty_avail' => 'required',
        // 'product_image1' => 'required',
        // 'currency_unit' => 'required',
        // 'amazon_link' => 'required',
        // 'facebook_link' => 'required',
        // 'kijiji_link' => 'required',
        // 'product_desc' => 'required',
        // 'timestamps'  => 'required',
        ]);

    Product::create($request->all());
    return redirect()->route('products.index')
    ->with('success','Product created successfully.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
        'id' => 'required',
        'product_name' => 'required',
        // 'part_no' => 'required',
        // 'board_no' => 'required',
        // 'compatible_model' => 'required',
        // 'product_selling_price' => 'required',
        // 'product_cost_price' => 'required',
        // 'product_qty_avail' => 'required',
        // 'product_image1' => 'required',
        // 'currency_unit' => 'required',
        // 'amazon_link' => 'required',
        // 'facebook_link' => 'required',
        // 'kijiji_link' => 'required',
        // 'product_desc' => 'required',
        // 'timestamps'  => 'required',
        ]);
        $product->update($request->all());
        return redirect()->route('products.index')
        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')
        ->with('success','Product deleted successfully');
    }
}
