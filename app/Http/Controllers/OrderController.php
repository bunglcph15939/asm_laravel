<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\Cart_detail;
class OrderController extends Controller
{
    public function index(){
        $order= order::select('*')->paginate(10);
        return view('admin.admin_order',compact('order'));
    }
    public function detail($id){
        $detail=Cart_detail::select('*')
        ->where('id_order',$id)
        ->paginate(10);

        return view('admin.admin_order_detail',compact('detail'));
    }
    public function status(order $order){

        if($order['status']==0){
            $order['status']=1;
         }else{
            $order['status']=0;
         }
         $order->update([
             'status'=>$order['status']
         ]);
         return redirect()->back();
    }
}
