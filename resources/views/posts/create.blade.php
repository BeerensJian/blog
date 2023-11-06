<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <x-form.base
            :title="'Create a Post'"
            :categories="$categories"
            :action="'/admin/posts/create'"
        />
    </main>
</x-layout>
