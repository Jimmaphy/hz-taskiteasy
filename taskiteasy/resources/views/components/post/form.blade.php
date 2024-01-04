<x-general.contentblock>
    <form method="POST" action="{{ route('posts.create') }}">
        @csrf

        <x-form.input :name="'title'" :label="'Title'" />
        <x-form.input :name="'excerpt'" :label="'Excerpt'" />
        <x-form.textarea :name="'body'" :label="'Body'" />
        <x-form.addandcancelbuttons :href="route('posts')" />
    </form>
</x-general.contentblock>
