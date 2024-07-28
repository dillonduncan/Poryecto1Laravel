<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

//el orden de las rutas importa
Route::get('/', HomeController::class);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/create', [PostController::class , 'create']);

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/posts/{post}/{categoria?}', [PostController::class, 'showCategoria']);

Route::get('prueba',function(){
    $post=new Post;
    //Hacer un registro
    // $post->title='Titulo 2';
    // $post->content='Contenido 2';
    // $post->category='Categoria 2';

    // $post->save();
    // return $post;

    //consultar y actualizar un registro
    // $post=Post::find(1);
    //$post=Post::where('id',2)->first();

    // $post->title='Titulinho';
    // $post->save();

    //obtener todos los registros
    // $post=Post::all();
    // $post=Post::get();
    // $post=Post::orderBy('title','asc')->get();
    // $post=Post::orderBy('id','asc')->select('id','title')->take(1)->get();

    //eliminar registro
    $post=Post::find(1);
    $post->delete();
    return "Eliminado correctamente";
});