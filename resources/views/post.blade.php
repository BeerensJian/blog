<x-layout>
    <x-slot name="content">
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{!! $post->body !!}</p>
        </article>
        <a href="/">Go Back</a>
    </x-slot>
</x-layout>


