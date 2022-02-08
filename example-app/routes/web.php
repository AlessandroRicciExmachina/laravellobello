<?php

use App\Models\Category;
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
    // return  view('posts', ['posts' => Post::get()]);
    // dd();
    return  view('posts', ['posts' => Post::with('category')->get()]);
});

Route::get('post/{post:slug}', function (Post $post) {
    // dd($post->with('users')->get()[0]->toArray());
    ddd($post->users->name);
    return view('post', ['post' => $post]);
});

Route::get('category/{category:slug}', function (Category $category) {
    // dd($category->posts->toArray());
    return view('category', ['posts' => $category->posts, 'category' => $category]);
});

// Route::get('post/{post}', function (Post $post) {
//     return view('post', ['post' => $post]);
// });
