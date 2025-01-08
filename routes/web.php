<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardCategoriesController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});


Route::get('/posts',[PostController::class,'show']);
Route::get('/post/{post:slug}',[PostController::class,'post_single'])->name('post_single');

Route::get('/categories',[CategoryController::class,'show']);
Route::get('/category/{slug:slug}',[CategoryController::class,'show_single']);

Route::get('/login',[LoginController::class,'show'])->Middleware('guest')->name('login');
Route::post('/login_submit',[LoginController::class,'authentication'])->name('authentication');
Route::post('/logout',[LoginController::class,'logout']);

Route::get('/register',[RegisterController::class,'show'])->middleware('guest')->name('submit_register');
Route::post('/register',[RegisterController::class,'register']);


Route::middleware('auth')->group(function(){
    Route::view('/dashboard','dashboard.index');
    Route::resource('/dashboard/posts', DashboardPostController::class);
});
Route::middleware(['can:categories', 'auth'])->group(function () {
    Route::resource('/dashboard/categories', DashboardCategoriesController::class)->except('show');
});

