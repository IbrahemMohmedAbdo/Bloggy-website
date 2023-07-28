<?php

use App\Http\Controllers\BloggyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Groub RouteController For website...


Route::controller(BloggyController::class)->group(function () {
    Route::get('/', 'home')->name('blogy');
    Route::get('/category', 'category')->name('category');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/single', 'single')->name('single');
    Route::get('/search-result','search_result')->name('search-result');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');

});

// Route for resourse PostController...
Route::resource('/posts', PostController::class)->middleware('auth');






// Recource controller for add edite and delete student informatione....
Route::resource('/students', StudentController::class);

// Route For Auth...
Auth::routes();
Route::get('/home',[HomeController::class,'index'])->name('home');
