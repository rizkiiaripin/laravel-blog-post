<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class DashboardCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Categories = Category::filter('search')->get();
        return view('dashboard.categories.index',compact('Categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $table = new Category;
        $table->title = $request->title;
        $table->slug = $request->slug;
        $table->save();
        redirect('dashboard/categories');
        // to_route('dashboard/categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);
        return view('dashboard.categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $table = Category::find($id);
        $table->title = $request->title;
        $table->update();
        return redirect('/dashboard/categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $table = Category::find($id);
        $table->delete();
        return redirect('/dashboard/categories');
    }
}
