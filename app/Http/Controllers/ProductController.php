<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use File;
use DataTables;
//use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
return view('backend.products.index',compact('products'))
->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function getProducts(Request $request)
    {
        if ($request->ajax()) {

            $data = Product::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action',function ($data){
                    return $this->getActionColumn($data);
                }) 
                ->rawColumns(['action'])
                ->make(true);
        }
    }
     protected function getActionColumn($data): string
    {
        $showUrl = route('admin.products.show', [$data->id]);
            $editUrl = route('admin.products.edit', [$data->id]);
            $imageUrl = route('products.images.index', $data->id);
            $delUrl = route('admin.products.destroy', $data->id);

            return "
            <a class='waves-effect btn btn-success' data-value='$data->id' href='$showUrl'> Show</a> 
            <a class='waves-effect btn btn-primary' data-value='$data->id' href='$editUrl'>Edit</a>
            <a class='waves-effect btn btn-danger' data-value='$data->id' href='$delUrl'>Delete</a>
              <a class='waves-effect btn btn-warning' data-value='$data->id' href='$imageUrl'>Images</a>


                        ";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
       /*$categories = DB::table('categories')
             ->select(DB::raw('id,title, status'))
             ->where('status', '=', "active")
             ->get();*/
             $categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();


        return view('backend.products.create',compact('categories'));
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
    return redirect()->route('products')
    ->with('success','Product created successfully.');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        
       // $product = Product::find($id);
         $product = Product::where('products.id', $id) 
         ->join('categories', 'categories.id', '=', 'products.category')
         ->select('products.*', 'categories.title')
         ->first();

    


      
       
        return view('backend.products.show',compact('product'));   
         }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {

        $product = Product::find($id);
       
        $categories = Category::where('parent_id', null)->orderby('title', 'asc')->get();

        return view('backend.products.edit',compact('product','categories'));
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
        return redirect()->route('products')
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
        return redirect()->route('products')
        ->with('success','Product deleted successfully');
    }

    public function imagelist($p_id,Product $product)
    {
        
        $path = 'images/'.$p_id.'/';
        if (! File::exists(public_path().'/'.$path)) 
        {
            File::makeDirectory(public_path().'/'.$path,0777,true);
        }


       // $files = Storage::allFiles($path);

        //return view('products.images.index', compact('p_id','product'));

        //return View::make('user')->with($data);

         return view('backend.products.images.index',compact('product','p_id'));

    }

    public function imageupload()
    {
        return view('backend.products.images.create');
    }

    public function storeimages(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  
     
        $request->image->move(public_path('images'), $imageName);
  
        /* Store $imageName name in DATABASE from HERE */
    
        return back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName); 
    }
}
