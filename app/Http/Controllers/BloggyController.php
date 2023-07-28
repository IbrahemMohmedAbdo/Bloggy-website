<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloggyController extends Controller
{
    //
    public function home(){
        return view('bloggy.index');
    }

    public function category()
    {
        return view('bloggy.category');
    }

    public function blog()
    {
        return view('bloggy.blog');
    }
    public function single()
    {
        return view('bloggy.single');
    }

public function search_result(){
    return view('bloggy.search-result');
}

public function about(){
    return view('bloggy.about');
}

public function contact(){
    return view('bloggy.contact');
}






}
