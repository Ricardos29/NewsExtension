<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    // Lista de posts
    public function index()
    {
        $posts = Post::all();

        return view('layout.index', ['posts' => $posts]);
    }
}
