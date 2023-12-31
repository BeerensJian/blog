<x-dropdown>
    <x-slot name="trigger">
        <button class="py-3 pl-3 pr-9 rounded-xl text-sm font-semibold inline-flex w-full">
            <span>{{ request('category') ?? 'Category' }}</span>
            <svg class="transform -rotate-90 absolute pointer-events-none" style="right: 12px;" width="22"
                 height="22" viewBox="0 0 22 22">
                <g fill="none" fill-rule="evenodd">
                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                    </path>
                    <path fill="#222"
                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z"></path>
                </g>
            </svg>
        </button>
    </x-slot>

    <x-dropdown-link href="/?{{ http_build_query(request()->only(['search'])) }}" :active="count(request()->query()) == 0">All</x-dropdown-link>
    @foreach($categories as $category)
        <x-dropdown-link
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="request('category') === $category->slug ?? false"
        >
            {{ $category->name }}
        </x-dropdown-link>
    @endforeach
</x-dropdown>
