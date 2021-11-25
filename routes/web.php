<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Soni Hidayatulloh",
        "email" => "sonihidayatulloh797@gmail.com",
        "image" => "Soni.jpg"
    ]);
});

// blog
Route::get('/blog', function () {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

// halaman single post
route::get('posts/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);

});


