<?php

namespace App\Http\Controllers;
use App\Models\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Blog",
            "posts" => Post::all()
        ]);
    }

    public function show(Post $post){
        return view('post',[
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
