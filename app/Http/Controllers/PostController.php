<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('post.index');
    }
    public function create()
    {
        return view('post.create');
    }
    public function show($post)
    {
        return view('post.show', compact('post'));
    }
    public function showCategoria($post, $categoria=null){
        return view('post.showCategoria', compact('post', 'categoria'));
    }
}
