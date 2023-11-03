@props(['name'])

<div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="{{ $name }}">
        {{ ucfirst($name) }}
    </label>
    <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
              id="{{ $name }}" placeholder="{{ ucfirst($name) }}" name="{{ $name }}"
    ></textarea>

    @error($name)
        <span class="text-xs text-red-500">{{ $message }}</span>
    @enderror
</div>
