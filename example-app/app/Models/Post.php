<?php

namespace App\Models;


use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post {


    public $title;
    public $excerpt;
    public $date;
    public $body;
    public $slug;


    public function __construct($title, $excerpt, $date, $body, $slug) {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all() {

        return cache()->rememberForever('posts.all', function () {
            return $posts =
                collect(File::files(resource_path("views/posts/")))
                ->map(function ($file) {
                    return  $document =  YamlFrontMatter::parseFile($file->getPathname());
                })
                ->map(function ($document) {
                    return new Post($document->title, $document->excerpt, $document->date, $document->body(), $document->slug);
                })
                ->sortByDesc('date');
        });
    }
    public static function find($slug) {

        $post = static::all()->firstWhere('slug', $slug);
        return $post;

        // dd($post);
        // $path = resource_path("views/posts/{$slug}.html");

        // if (!file_exists($path)) {
        //     throw new ModelNotFoundException();
        // }
        // $post = cache()->remember("posts.{$slug}", 3600, function () use ($path) {
        //     return file_get_contents($path);
        // });
        // return $post;
    }

    public static function findOrFail($slug) {

        $post = static::find($slug);
        if (!$post) {
            throw new ModelNotFoundException();
        }
        return $post;
    }
}
