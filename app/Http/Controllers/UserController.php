<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserControllerRequest;
use App\Http\Requests\UpdateUserControllerRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user=User::select('id','name','username','email','avatar','role')->get();
        return view('admin.admin_user',[
            'user'=>$user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(StoreUserControllerRequest $request)
    {


            $user=new User();
            $user->fill($request->all());
            if($request->hasFile('avatar')){

                $img=$request->avatar;
                $imgName=$img->hashName();
                $imgName=$request->name.'_'.$imgName;
                $user->avatar=$img->storeAs('images/users',$imgName);
            }
            else{
                $user->avatar='images/users/macdinh.webp';
            }

            $user->password=Hash::make($request->password);
            $user->save();
            return redirect()->route('store.hien');


    }
    public function comment(Request $request){
        $comment= new Comment();
        $comment->fill($request);
        $comment->save();
        return redirect()->route('store.product_detail');


    }
    public function sua_quyen(User $user){

        if($user['role']==0){
            $user['role']=1;
         }else{
            $user['role']=0;
         }
         $user->update([
             'role'=>$user['role']
         ]);
         return redirect()->route('admin.user.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserControllerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserControllerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function show(UserController $userController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function edit(UserController $userController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserControllerRequest  $request
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserControllerRequest $request, UserController $userController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserController  $userController
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserController $userController)
    {
        //
    }
}
