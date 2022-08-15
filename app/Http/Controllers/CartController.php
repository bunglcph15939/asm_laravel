<?php

namespace App\Http\Controllers;

//use App\Models\Cart;

use App\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;



class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cuahang.cart');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddCart(Request $request,$id){

        $product=Product::select('id','name','price','description','color','size','category_id')
        ->where('id',$id)
        ->with('images')
        ->first();
       // dd($product->images->first());
        if($product !=null){
                $cart=Session('Cart') ? Session('Cart') :null ;
                $newCart= new Cart($cart);
                $newCart->AddCart($product,$id);
                $request->Session()->put('Cart',$newCart);
        }



        return redirect()->back()->with('alert','xin chào');
    }

    public function DeleteCart(Request $request,$id){



                $cart=Session('Cart') ? Session('Cart') :null ;
                $newCart= new Cart($cart);
                $newCart->deleteItem($id);
                if(Count($newCart->products) >0){
                    $request->Session()->put('Cart',$newCart);
                }
                else{
                    $request->Session()->forget('Cart');
                }
                return redirect()->back()->with('alert','xin chào');
        }

        public function checkout(){
            
        }


    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
