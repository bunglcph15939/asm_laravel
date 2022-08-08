<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\image;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::select('id','name','price','description','color','size','category_id')
       ->with('category')
        ->get();
        return view('admin.admin_product',[
            'product'=>$product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::select('id','name')->get();
        $products = Product::Select('id', 'name', 'price','size','category_id')
        ->with('category')
        ->paginate(5);
    return view('admin.add_new.form_product',[
        'products'=>$products,
        'category'=>$category
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)

    {


        // dd($request);
        $product = new Product();
        $product->fill($request->all());
        $product->save();
        return redirect()->route('admin.show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {

        $category=category::select('id','name')->get();

        return view('admin.add_new.form_product',[
            'product'=>$product,
            'category'=>$category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product,$id)
    {



       $pro =Product::findOrFail($id);
        $pro->update($request->all());
        return redirect()->route('admin.show');


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
        return redirect()->route('admin.show');
    }
    public function show_image(Product $product){
        $image=Image::select('id','name','id_product')
        ->with('product')
        ->where('id_product','=',$product->id)
        ->get();

        return view('admin.admin_image',[
            'product'=>$product,
            'image'=>$image
        ]);
    }
    public function hien(){
        $product=Product::select('id','name','price','description','color','size','category_id')
        ->with('images')
         ->paginate(9);

         $category=category::select('id','name')
         ->with('products')
        ->get();

         return view('cuahang.category',[
             'product'=>$product,
             'category'=>$category
         ]);
    }
    public function hien_index(){
        $product=Product::select('id','name','price','description','color','size','category_id')
        ->with('images')
         ->paginate(9);

         $category=category::select('id','name')
         ->with('products')
        ->get();
         return view('cuahang.index',[
            'product'=>$product,
            'category'=>$category
        ]);
    }
    public function detail(Product $product,$id){

        $product=Product::select('id','name','price','description','color','size','category_id')
        ->where('id','=',$id)
        ->with('category')
         ->get();

         $image=Image::select('id','name','id_product')
        ->where('id_product','=',$id)

        ->get();
        return view('cuahang.product_detail',[
            'product'=>$product,
            'image'=>$image
        ]);
    }
}
