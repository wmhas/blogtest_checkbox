<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostDemoController extends Controller
{
    
    public function index()
    {
        $posts = Post::all();
        return view('multiplecheckboxdemo',compact('posts'));
    }

    public function create()
    {
        return view('multiplecheckboxformdemo');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $input['category'] = $request->input('category');
        Post::create($input);
        return redirect()->route('posts.index');
    }
}
