<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function home()
    {
    	return view('posts.home');
    }

    public function blog()
    {
    	return view('posts.blog');
    }
}
