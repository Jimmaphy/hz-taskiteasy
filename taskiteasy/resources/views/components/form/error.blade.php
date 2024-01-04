@if ($errors->has($name))
    <div class="bg-red-100 border-2 border-red-400 text-red-700 px-4 py-3 rounded relative mt-1 mb-2">
        {{ $errors->first($name) }}
    </div>
@endif
