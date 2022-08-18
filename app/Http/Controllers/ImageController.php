<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image=Image::select('id','name','id_product')
        ->with('product')
        ->get();
        return view('admin.admin_image',[
            'image'=>$image
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product=Product::select('id','name')->get();
        return view('admin.add_new.form_image',[
                'product'=>$product
        ]);
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
            'name' => ['required','mimes:jpg,png','max:5000'],
        ]);
        $image = new Image();
        if($request->hasFile('name')){
            $avarta=$request->name;
            $avartaName=$avarta->hashName();
            $avarta->storeAs('images/product',$avartaName);
            $image->name=$avartaName;
        }
        $request->id_product;
        $image->id_product=$request->id_product;

        $image->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {

        $product=Product::select('id','name')->get();
        return view('admin.add_new.form_image',[
            'image'=>$image,
            'product'=>$product
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {

        $data = $request->all();

        if($request->hasFile('name')==true){
            // unlink($user->avarta);
            $avarta=$request->name;
            $avartaName=$avarta->hashName();
            $avarta->storeAs('images/product',$avartaName);
            $data['name']=$avartaName;
        }


        $image->update($data);
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {

        $image->delete();
        return redirect()->route('admin.image.index');
    }
}
