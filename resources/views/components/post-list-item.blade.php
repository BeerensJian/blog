@props(['post'])

<li class="flex justify-between gap-x-6 py-5">
    <div class="flex flex-col justify-around">
        <p class="text-sm font-semibold leading-6 text-gray-900 h-fit">{{ $post->title }}</p>
    </div>

    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
        <a href="/admin/posts/{{ $post->id }}/edit"><button class="bg-white px-4 rounded-md border border-gray-200">Edit</button></a>
        <p class="mt-1 text-xs leading-5 text-gray-500">Last edited:
            <time datetime="2023-01-23T13:23Z">{{ $post->created_at->diffForHumans() }}</time>
        </p>
    </div>
</li>
