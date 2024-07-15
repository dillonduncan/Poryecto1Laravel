<?php

use Illuminate\Support\Facades\Route;

//el orden de las rutas importa
Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return 'vista de posts';
});

Route::get('/posts/create', function(){
    return "Aqui se mostrara la vista de crear";
});

Route::get('/posts/{post}', function ($post) {
    return "vista de {$post}";
});

Route::get('/posts/{post}/{categoria?}', function ($post,$categoria=null) {
    if($categoria){
        return "vista de {$post} de la categoria {$categoria}"; 
    }
    return "vista de {$post}";
});