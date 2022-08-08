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

        $email=$request->email;
        $password=$request->password;

       if(Auth::attempt(
       [
       'email'=>$email,
       'password'=>$password
       ])   )
       {
        if(Auth::user()->role==1){
            return redirect()->route('admin.index');
        }
        else{
            return redirect()->route('store.hien');
        }

       }else{
            return redirect()->route('dangnhap.getlogin')->with('error', 'Lỗi Login');
       }
    }
    public function logout(){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('store.hien');
    }
}
