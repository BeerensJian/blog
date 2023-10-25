<header class="max-w-xl mx-auto mt-20 text-center">
    <h1 class="text-4xl">
        Latest <span class="text-blue-500">Laravel From Scratch</span> News
    </h1>



    <div class="space-y-2 lg:space-y-0 lg:space-x-4 mt-4">
        <!--  Category -->

        <x-dropdown>
            <x-slot name="trigger">
                <button class="py-2 pl-3 pr-9 text-sm font-semibold inline-flex w-full">
                    <span>{{ $currentCategory->name ?? 'Category' }}</span>
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

            <x-dropdown-link href="/" :active="request()->routeIs('home')">All</x-dropdown-link>
            @foreach($categories as $category)
                <x-dropdown-link
                    href="/categories/{{ $category->slug }}"
                    :active="isset($currentCategory) && $currentCategory->is($category)"
                >
                    {{ $category->name }}
                </x-dropdown-link>
            @endforeach
        </x-dropdown>



        <!-- Search -->
        <div class="relative flex lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2">
            <form method="GET" action="/">
                <input type="text" name="search" placeholder="Find something"
                       class="bg-transparent placeholder-black font-semibold text-sm">
            </form>
        </div>
    </div>
</header>
