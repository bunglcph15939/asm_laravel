<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserControllerRequest;
use App\Http\Requests\LoginRequest;
class LoginController extends Controller
{
    function index(){
        return view('cuahang.login');
    }
    function register(){
        return view('cuahang.register');
    }

    function login(LoginRequest $request){
        $user= User::where('email',$request->email)->first();
        $email=$request->email;
        $password=$request->password;
        if($user){
        if($user->status==0){
            return redirect()->back()
            ->withInput()
            ->with('error','Tài khoản chưa được kích hoạt');
        }
       else if(Auth::attempt(
       [
       'email'=>$email,
       'password'=>$password
       ])   )
       {
        if(Auth::user()->role==1){
            return redirect()->route('admin.index');
        }
        else if(Auth::user()->role==0){
            return redirect()->route('store.hien');
        }

       }else{
            return redirect()->route('dangnhap.getlogin')->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
       }
    }
    else{
        return redirect()->back()->with('error','Tài khoản chưa được đăng kí');
    }

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('store.hien');
    }
}
