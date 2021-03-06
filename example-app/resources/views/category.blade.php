<x-layout title="My personal blog">

    @include('__post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
        @else
            <p class="text-center">No post yet! Please come back later!</p>
        @endif

    </main>

</x-layout>
