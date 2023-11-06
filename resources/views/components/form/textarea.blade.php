@props(['name', 'value' => ''])

<div class="mb-4">
    <x-form.label name="{{ $name }}"/>
    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="{{ $name }}" placeholder="{{ ucfirst($name) }}" name="{{ $name }}" rows="10"
    >{{ $value }}</textarea>

    @error($name)
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
