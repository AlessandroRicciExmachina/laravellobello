<?php

use Illuminate\Support\Facades\Route;
use App\Models\{User, Post, Category};
use App\Http\Controllers\{PostController, RegisterController, SessionController};

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

Route::GET('/{page?}', [PostController::class, 'index'])->where('page', '[0-9]+')->name('home');
Route::GET('post/{post:slug}', [PostController::class, 'show']);

Route::GET('login', [SessionController::class, 'create'])->middleware('guest');
Route::POST('sessions', [SessionController::class, 'store'])->middleware('guest');

Route::GET('register', [RegisterController::class, 'create'])->middleware('guest');
Route::POST('register', [RegisterController::class, 'store'])->middleware('guest');
Route::POST('logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::GET('testfulvia', function () {

    return 'alsjkdjasljkd';
});

// Route::get('category/{category:slug}', function (Category $category) {

//     return view('category', [
//         'posts' => $category->posts,
//         'currentCategory' => $category,
//         'categories' =>  Category::all()
//     ]);
//     // return view('category', ['posts' => $category->posts->load(['category', 'author'])]);
// });



// Route::get('post/{post}', function (Post $post) {
//     return view('post', ['post' => $post]);
// });
