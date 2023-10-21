<x-layout>
    <x-slot name="content">
        <article>
            <h2>{{ $post->title }}</h2>
            <p><a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a></p>
            <p>{!! $post->body !!}</p>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>


