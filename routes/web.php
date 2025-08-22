<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    // $arrayPost = Post::all();
    // menggunakan Eager Loading, untuk mengatasi n + 1 problem
    // $arrayPost = Post::with(['author', 'category'])->latest()->get();
    $arrayPost = Post::latest()->get();

    return view('blog', ['title' => 'Blog Page', 'arrayPost' => $arrayPost]);
});

Route::get('/blog/{post:slug}', function (Post $post) {

    return view('blog_detail', ['title' => 'Blog Detail', 'post' => $post]);
});

Route::get('/authors/{user:username}', function (User $user) {
    // $posts = $user->posts->load('author', 'category');
    
    return view('blog', ['title' => count($user->posts) . ' Article By. ' . $user->name, 'arrayPost' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // $posts = $category->posts->load('author', 'category');

    return view('blog', ['title' => 'Categoty: ' . $category->name, 'arrayPost' => $category->posts]);
});

Route::get('/about', function () {  
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
