<x-general.contentblock>
    @if ($errors->any())
        <div class="bg-red-100 border-2 border-red-400 text-red-700 px-4 py-3 rounded relative mb-2">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('posts.create') }}">
        @csrf
        <label for="title">Title</label>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
            class="border-2 border-gray-200 dark:border-gray-600 rounded w-full mt-1 mb-2 p-1">

        <label for="excerpt">Except</label>
        <input
            type="text"
            id="except"
            name="excerpt"
            value="{{ old('excerpt') }}"
            class="border-2 border-gray-200 dark:border-gray-600 rounded w-full mt-1 mb-2 p-1">

        <div class="mb-2"><label for="body">Body</label></div>
        <textarea
            id="body"
            name="body"
            rows="10">
            {{ old('body') }}
        </textarea>

        <div class="flex place-content-center">
            <x-general.button :class="'border-2 border-gray-300'" :type="'submit'">Add</x-general.button>
            <x-general.button :href="route('posts')" :class="'border-2 border-gray-300'">Cancel</x-general.button>
        </div>
    </form>

    <script>
        tinymce.init({
          selector: '#body'
        });
    </script>
</x-general.contentblock>
