<?php

namespace App\Http\Controllers;

//use App\Models\Cart;
use illuminate\Support\Facades\Auth;
use App\Cart;
use App\Models\order;
use App\Models\Cart_detail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use App\Http\Requests\CheckoutRequest;



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
    public function save_edit(Request $request,$id ){
        $cart=Session('Cart') ? Session('Cart') :null ;
        $newCart= new Cart($cart);
        $newCart->save_edit($id,$request->number);

            $request->Session()->put('Cart',$newCart);

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
                return redirect()->back()->with('alert','Thành công');
        }

        public function checkout(CheckoutRequest $request){

            $order= new order();
             $order->name=$request->name;
             $order->phone=$request->phone;
             $order->address=$request->address;
            $order->total=Session::get('Cart')->totalPrice;
            $order->quantity=Session::get('Cart')->totalQuanty;
            $order->status=0;
               $order->save();
            $id_order=order::select('*')
            ->max('id');
           foreach(Session::get('Cart')->products as $item ) {
            $order_detail=new Cart_detail();

            $order_detail->name=$item['productInfor']->name;
            $order_detail->quantity=$item['quanty'];
            $order_detail->total=$item['price'];
            $order_detail->id_order=$id_order;
            $order_detail->save();
           }
           return redirect()->route('store.hien')->with('tb','thành công');



        }



}
