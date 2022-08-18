<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category=category::select('id','name')
         ->with('products')
        ->paginate(10);


        return view('admin.admin_category',[
            'category'=>$category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add_new.form_category');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|min:5|',
        ]);

        $category = new Category();
        $category->fill($request->all());
        $category->save();
        return redirect()->route('admin.category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('admin.add_new.form_category',[
            'category'=>$category
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category,$id)
    {
        $validated = $request->validate([
            'name' => 'required|max:255|min:5',

        ]);

       $cat =Category::findOrFail($id);
        $cat->update($request->all());
        return redirect()->route('admin.category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $product=Product::where('category_id',$category->id)->get();
        foreach($product as $item){
            $item->update(['category_id'=>0]);
        }
        $category->delete();
        return redirect()->route('admin.category');
    }
    public function hien($id,Category $category){

            $loc_danhmuc=Product::select('id','name','price','description','color','size','category_id')
            ->where('category_id','=',$id)
            ->with('category')
            ->get();
            $category=Category::select('id','name')
            ->get();
            return view('cuahang.category',[
                'loc_danhmuc'=>$loc_danhmuc,
                'category'=>$category
            ]);


    }
}
