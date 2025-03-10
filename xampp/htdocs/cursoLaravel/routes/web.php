<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    /* return view('welcome'); */
    return ('Welcome to the Home page');
});

Route::get('/posts', function () {
    return ('Aqui se listaran los posts');
});

// si pongo el url /post/create debajo del otro post, me mostraria el msj del otro get, ya que coinciden el contenido esperado de la url
Route::get('/post/create', function () {
    return "Aqui se mostrara un formulario para crear un post";
});

Route::get('/posts/{post}/{category?}', function ($post, $category = null) {
    if ($category) {
        return "Aqui se mostrara el post {$post} de la categoria {$category}";
    }
    return "Aqui se mostrara el post {$post}";
});

