@props([
    'name',
    'type' => 'text',
    'value' => ''
])


<div class="mb-4">
    <x-form.label name="{{ $name }}"/>
    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
           id="{{$name }}" type="{{ $type }}" placeholder="{{ ucfirst($name) }}" name="{{ $name }}" value="{{ $value }}"
    >

    @error($name)
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
