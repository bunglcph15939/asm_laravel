<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class TrackingController extends Controller
{
    function index(){
        return view('cuahang.tracking');
    }
    function check(Request $request){
        $validated = $request->validate([
            'phone' => 'required|max:10|min:10',
        ]);
        $order=Order::select('*')
        ->where('phone',$request->phone)
        ->get();

        return view('cuahang.tracking',compact('order'));

    }
}
