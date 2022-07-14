<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    // Lists tags
    public function index()
    {
        $tags = Tag::all();

        return view('admin.tags.index', ['tags' => $tags]);
    }

    // Create Post
    public function create()
    {
        return view('admin.tags.create');
    }

    // Store Post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required'
        ]);

        if($validated)
        {
            $tag = Tag::create([
                'title' => $request->title
            ]);

            return view('admin.tags.edit', ['tag' => $tag]);
        }

        return ['msg' => 'Erro ao criar tag!'];
    }

    // Create Post
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', ['tag' => $tag]);
    }

    // Store Post
    public function update(Request $request, Tag $tag)
    {
        $validated = $request->validate([
            'title' => 'required'
        ]);

        if($validated)
        {
            $tag = $tag->update([
                'title' => $request->title
            ]);

            return view('admin.tags.index');
        }

        return ['msg' => 'Erro ao atualizar tag!'];
    }
}
