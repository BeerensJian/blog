<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="max-w-2xl mx-auto bg-gray-100 p-8 rounded border border-gray-200">
            <h1 class="text-2xl text-bold text-center mb-6">Dashboard</h1>
            <ul role="list" class="divide-y divide-gray-100">
                @foreach($posts as $post)
                    <x-post-list-item :post="$post"/>
                @endforeach
            </ul>
        </section>
    </main>
</x-layout>
