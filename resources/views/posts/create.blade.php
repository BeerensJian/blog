<x-layout>
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        <section class="max-w-md mx-auto bg-gray-100 p-8 rounded border border-gray-200">
            <h1 class="text-2xl text-bold text-center">Create a post</h1>
            <form action="/admin/posts/create" method="post">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
                        Title
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="title" type="text" placeholder="Title" name="title"
                    >

                    @if($errors->has('title'))
                        <span class="text-xs text-red-500">{{ $errors->first('title') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="excerpt">
                        Excerpt
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                           id="excerpt" placeholder="Excerpt" name="excerpt"
                    ></textarea>

                    @if($errors->has('excerpt'))
                        <span class="text-xs text-red-500">{{ $errors->first('excerpt') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="body">
                        Body
                    </label>
                    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                              id="body" placeholder="Your article text" name="body"
                    ></textarea>

                    @if($errors->has('body'))
                        <span class="text-xs text-red-500">{{ $errors->first('body') }}</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                        Title
                    </label>


                    @php
                    $categories = \App\Models\Category::all()

                    @endphp
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
