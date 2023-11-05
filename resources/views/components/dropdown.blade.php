<div
    x-data="{ show: false }"
    class="relative flex flex-col lg:inline-flex items-center rounded-xl w-fit"
>
{{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

{{--  Links  --}}
    <div x-show="show" class="inline-flex flex-col w-full absolute bg-gray-100 top-12 rounded py-3">
        {{ $slot }}
    </div>
</div>
