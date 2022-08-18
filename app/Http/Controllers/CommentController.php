<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
class CommentController extends Controller
{
   function comment(Request $request,$id){
        $comment= new Comment();
        $comment->content=$request->content;
        $comment->product_id=$id;
        $comment->parent=0;
        $comment->user_id=Auth::user()->id;
        $comment->save();
    return redirect()->back();

   }
}
