<label for="{{ $name }}">{{ $label }}</label>
<x-form.error :name="$name" :errors="$errors" />

<input
    type="number"
    id="{{ $name }}"
    name="{{ $name }}"
    value="{{ isset($value) ? $value : old($name) }}"
    min="{{ $min ?? 0 }}"
    max="{{ $max ?? 100 }}"
    step="{{ $step ?? 1 }}"
    class="border-2 border-gray-200 dark:border-gray-600 rounded w-full mt-1 mb-2 p-1">

