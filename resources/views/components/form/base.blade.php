@props([
    'title',
    'categories',
    'post',
    'method' => 'post',
    'action'
])

@php
    $isSelected = function($category_id) use ($post)
    {
        if ($post && $post->category_id === $category_id){
            return 'selected';
        }
        return '';
    }
@endphp


<section class="max-w-2xl mx-auto bg-gray-100 p-8 rounded border border-gray-200">
    <h1 class="text-2xl text-bold text-center mb-6">{{ $title }}</h1>
    <form action="{{ $action }}" method="{{ strtolower($method) === "get" ? "get" : "post" }}" enctype="multipart/form-data">
        @csrf
        @if(strtolower($method) === "patch")
            @method('patch')
        @elseif(strtolower($method) === 'put')
            @method('put')
        @endif
        <x-form.input name="title" :value="$post->title"/>
        <x-form.textarea name="excerpt" :value="$post->excerpt"/>
        <x-form.textarea name="body" :value="$post->body"/>
        <x-form.input name="thumbnail" type="file" />

        <div class="mb-4">
            <x-form.label name="category_id"/>

            <select id="category_id" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->getKey() }}" {{ $isSelected($category->id) }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="bg-blue-500 rounded-lg text-white py-2 px-6">Create</button>
    </form>
</section>
