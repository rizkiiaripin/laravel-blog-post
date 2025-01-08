<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show(){
        return view('posts',['title' => 'blog',
        'post' => Post::filter(request(['search','category','author']))->latest()->paginate(10)->withQueryString() ]);
    }
    public function post_single(Post $post){
        $post = $post;
        return view('post',compact('post'),['title' => 'Post']);
    }
}
