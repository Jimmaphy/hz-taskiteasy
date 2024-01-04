<div class="mb-2">
    <label for="body">{{ $label }}</label>
    <x-form.error :name="$name" :errors="$errors" />
</div>

<textarea
    id="{{ $name }}"
    name="{{ $name }}"
    rows="10">
    {{ old($name) }}
</textarea>

<script>
    tinymce.init({
      selector: '#{{ $name }}'
    });
</script>
