<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // Lists Posts
    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', ['posts' => $posts]);
    }

    // Create Post
    public function create()
    {
        return view('admin.posts.create');
    }

    // Store Post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if($validated)
        {
            $post = Post::create([
                'title' => $request->title,
                'body' => $request->body
            ]);

            return view('admin.posts.edit', ['post' => $post]);
        }

        return ['msg' => 'Erro ao criar post!'];
    }

    // Create Post
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    // Store Post
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        if($validated)
        {
            $post = $post->update([
                'title' => $request->title,
                'body' => $request->body
            ]);

            return view('admin.posts.index');
        }

        return ['msg' => 'Erro ao atualizar post!'];
    }
}
