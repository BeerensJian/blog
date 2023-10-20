<x-layout>
    <x-slot name="content">
        @foreach($posts as $post)
            <article>
                <h2>
                    <a href="posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h2>
                <p>{{ $post->excerpt }}</p>
            </article>
        @endforeach
    </x-slot>
</x-layout>

