<div
    x-data="{ show: false }"
    class="relative flex flex-col lg:inline-flex items-center bg-gray-100 rounded-xl lg:w-32"
>
{{-- Trigger --}}
    <div @click="show = !show">
        {{ $trigger }}
    </div>

{{--  Links  --}}
    <div x-show="show" class="inline-flex flex-col w-full">
        {{ $slot }}
    </div>
</div>
