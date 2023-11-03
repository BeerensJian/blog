@props([
    'name',
    'type' => 'text'
])


<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ $name }}">
        {{ ucfirst($name) }}
    </label>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="{{$name }}" type="{{ $type }}" placeholder="{{ ucfirst($name) }}" name="{{ $name }}"
    >

    @error($name)
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
