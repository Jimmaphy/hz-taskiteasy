<label for="{{ $name }}">{{ $label }}</label>
<x-form.error :name="$name" :errors="$errors" />

<input
    type="text"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ old($name) }}"
    class="border-2 border-gray-200 dark:border-gray-600 rounded w-full mt-1 mb-2 p-1">

