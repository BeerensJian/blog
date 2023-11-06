<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-form.base
            :title="'Editing post'"
            :categories="$categories"
            :post="$post"
            method="put"
            action="/admin/posts/{{ $post->id }}/edit"
        />
    </main>
</x-layout>
