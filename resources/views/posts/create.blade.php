<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="max-w-md mx-auto bg-gray-100 p-8 rounded border border-gray-200">
            <h1 class="text-2xl text-bold text-center">Create a post</h1>
            <form action="/admin/posts/create" method="post" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title"/>
                <x-form.textarea name="excerpt"/>
                <x-form.textarea name="body" />
                <x-form.input name="thumbnail" type="file" />

                <div class="mb-4">
                    <x-form.label name="category_id"/>

                    <select id="category_id" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->getKey() }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="bg-blue-500 rounded-lg text-white py-2 px-6">Create</button>
            </form>
        </section>
    </main>
</x-layout>
