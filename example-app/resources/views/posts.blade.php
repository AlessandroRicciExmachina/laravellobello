<x-layout title="My personal blog">

    @include('__post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No post yet! Please come back later!</p>
        @endif
        {{-- <div class="lg:grid lg:grid-cols-3">
            <x-post-card></x-post-card>
            <x-post-card></x-post-card>
            <x-post-card></x-post-card>
        </div> --}}
    </main>

    {{-- <x-slot name='content'>
        ciccio
    </x-slot> --}}
    {{-- @foreach ($posts as $post)
        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="/post/{{ $post->slug }}"> {!! $post->title !!} </a>
            </h1>
            <p>
                Written by
                <a href="/author/{{ $post->author->username }}">{{ $post->author->name }} </a>
                In category
                <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach --}}
</x-layout>
