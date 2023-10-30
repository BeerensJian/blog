@props(['comment'])

<div class="col-start-5 col-span-8 flex gap-8 bg-gray-100 rounded p-6 border-gray-200 border border-gray-200" >
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60" class="rounded" alt="">
    </div>

    <div>
        <header class="mb-6">
            <h3 class="text-xl">{{ $comment->author->name }}</h3>
            <p class="text-xs">Posted
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
        </header>

        <p>{{ $comment->body }}</p>
    </div>
</div>
