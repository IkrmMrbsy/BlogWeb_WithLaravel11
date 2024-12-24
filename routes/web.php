<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=> 'Home Page']);
});

Route::get('/blog', function(){
    return view('blog', ['title'=> 'Blog Page', 'posts'=> Post::all()]);
});

Route::get('/blog/{slug}', function($slug){
    $post = Post::where('slug', $slug)->first();

    return view('components.single-blog', ['title'=> 'Single Blog', 'post'=> $post]);
});

Route::get('/contact', function(){
    return view('contact', ['title'=> 'Contact Page']);
});

Route::get('/about', function(){
    return view('about', [ 'nama'=> 'Ikram Marbasy','title'=> 'About Page']);
});