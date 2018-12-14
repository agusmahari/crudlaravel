<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\Category;

class PostController extends Controller
{
    public function create()
    {
        $categories = category::all();
        return  view('post.create', compact('categories'));
    }

    public function store()
    {
        Post::create([
            'title' => request('title'),
            'content' => request('content')
        ]);

    }
}
