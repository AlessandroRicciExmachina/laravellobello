<x-layout title="My personal blog">
    {{-- <x-slot name='content'>
        ciccio
    </x-slot> --}}
    @foreach ($posts as $post)

        <article class="{{ $loop->even ? 'foobar' : '' }}">
            <h1>
                <a href="post/{{ $post->slug }}"> {{ $post->title }} </a>
            </h1>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>