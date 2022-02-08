<x-layout title="{{ $post->title }}">
    <h1> {!! $post->title !!}</h1>

    <p>
        Written by {{ $post->users->name }} <a
            href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
    </p>

    <article>
        {!! $post->body !!}
    </article>

    <a href="/">Go Back</a>
</x-layout>
