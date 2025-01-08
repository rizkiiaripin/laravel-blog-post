<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show() {
        $category = Category::get();
        return view('categories',compact('category'),['title' => 'Categories']);
    }
    public function show_single(Category $slug) {
        
        return view('category',['title' => $slug->title,
                                'posts' => $slug->posts]);
    }
}
