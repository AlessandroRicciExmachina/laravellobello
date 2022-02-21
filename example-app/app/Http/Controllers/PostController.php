<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class PostController extends Controller {
    public function index() {
        // dd(Post::first()->toArray());
        $currentPage = request('page');
        Paginator::currentPageResolver(function () use ($currentPage) {
            return $currentPage;
        });

        return view('posts.index', [
            'posts' => Post::latest()->filter(request()->all())->paginate(6)
        ]);
    }
    public function show(Post $post) {

        return view('posts.show', ['post' => $post]);
    }
}