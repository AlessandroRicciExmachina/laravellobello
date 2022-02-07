<x-layout title="{{ $post->title }}">
    <h1> {{ $post->title }}</h1>
    <article>
        {!! $post->body !!}
    </article>
    <a href="/">Go Back</a>
</x-layout>
