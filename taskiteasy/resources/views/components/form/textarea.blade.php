<div class="mb-2">
    <label for="body">{{ $label }}</label>
    <x-form.error :name="$name" :errors="$errors" />
</div>

<div class="mb-2">
    <textarea
        id="{{ $name }}"
        name="{{ $name }}">
        {{ isset($value) ? $value : old($name) }}
    </textarea>
</div>

<script>
    tinymce.init({
      selector: '#{{ $name }}',
      height: {{ $height ?? 400 }},
    });
</script>
