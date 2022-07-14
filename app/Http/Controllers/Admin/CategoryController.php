<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Lists categories
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', ['categories' => $categories]);
    }

    // Create Post
    public function create()
    {
        return view('admin.categories.create');
    }

    // Store Post
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required'
        ]);

        if($validated)
        {
            $category = Category::create([
                'title' => $request->title
            ]);

            return view('admin.categories.edit', ['category' => $category]);
        }

        return ['msg' => 'Erro ao criar post!'];
    }

    // Create Post
    public function edit(Category $category)
    {
        return view('admin.categories.edit', ['category' => $category]);
    }

    // Store Post
    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'title' => 'required'
        ]);

        if($validated)
        {
            $category = $category->update([
                'title' => $request->title
            ]);

            return view('admin.categories.index');
        }

        return ['msg' => 'Erro ao atualizar category!'];
    }
}