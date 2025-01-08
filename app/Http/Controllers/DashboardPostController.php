<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $posts = Post::where('author_id' , auth()->user()->id )->filter(request(['search']))->get();
        return view('dashboard.posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        // $post = auth()->id->get();
        return view('dashboard.posts.create',['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'body'  => ['required'],
            'slug' => ['required']
        ]);
        $table = new Post;
        $table->title = $request->title;
        $table->body = $request->body;
        $table->category_id = $request->category;
        $table->slug = $request->slug;
        $table->author_id = $request->author_id;
        $table->save();
        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $post = Post::find($slug);
        return view('dashboard.posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('dashboard.posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Post::find($id);
        $table->title = $request->title;
        $table->update();
        return redirect('/dashboard/posts');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/dashboard/posts');
    }
}
