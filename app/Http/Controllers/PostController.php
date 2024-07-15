<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Aqui se mostraran los posts";
    }
    public function create()
    {
        return "Aqui es donde se crearan los posts";
    }
    public function show($post)
    {
        return "vista de {$post}";
    }
    public function showCategoria($post, $categoria=null){
        if($categoria){
            return "vista de {$post} de la categoria {$categoria}"; 
        }
        return "vista de {$post}";
    }
}
