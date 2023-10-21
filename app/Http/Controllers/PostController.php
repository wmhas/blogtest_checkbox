<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
       // echo "test show controller";
        return view('mcbdemo',compact('posts'));
    }

    public function create()
    {
        return view('multiplecheckboxformdemo');
    }

    public function edit(Post $post)
{
    // Assuming you have a Task model and $task is the task you want to edit
    // You can replace 'Task' with your actual model name

    // You can fetch any additional data needed for the edit view here
    // For example, if you want to load some related data, you can do so like this:
    // $relatedData = RelatedModel::all();

    return view('editform', compact('post'));
}

    public function store(Request $request)
    {
        $input = $request->all();
        $input['category'] = $request->input('category');
        Post::create($input);
        return redirect()->route('posts.index');
    }

    public function update(Request $request, Post $post)
{
    $validatedData = $request->validate([
        // Your validation rules here
    ]);

    $post->categories = $request->input('feature');
    // Update other task properties
    $post->save();

    return redirect()->route('tasks.index');
}
}