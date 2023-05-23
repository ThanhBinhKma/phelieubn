<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.index')->with(['posts' => $posts]);
    }
    public function create()
    {
        return view('admin.post.create');
    }

    public function store(CreatePostRequest $request)
    {
       $file_name = time() . $request->file->extension();
        $request->file->move(public_path('file'), $file_name);
       Post::create([
           'title' => $request->title,
           'description' => $request->description,
           'img' => $file_name,
       ]);
       return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.post.edit')->with(['post' => $post]);
    }

    public function update($id, UpdatePostRequest $request)
    {
        $post = Post::find($id);
        $post->title = $request->title; 
        $post->description = $request->description;
        $post->save();
        return redirect()->route('admin.dashboard');

    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.dashboard');

    }
}
