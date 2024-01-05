<x-general.contentblock>
    <form name="postform"
        method="POST"
        action="{{ isset($post) ? route('posts.update', ['post' => $post->id]) : route('posts.create') }}"
        onsubmit="return validateForm()">

        @csrf

        @if (isset($post))
            @method('PUT')
        @endif

        <x-form.input :name="'title'" :label="'Title'" :value="$post->title ?? ''" />
        <x-form.textarea :name="'excerpt'" :label="'Excerpt'" :height="200" :value="$post->excerpt ?? ''" />
        <x-form.textarea :name="'body'" :label="'Body'" :value="$post->body ?? ''" />
        <x-form.addandcancelbuttons :href="isset($post) ? route('posts.show', ['post' => $post->id]) : route('posts')" />
    </form>

    <x-form.validationfunctions />

    <script>
        function validateForm() {
            const title = document.forms["postform"]["title"].value;
            const excerpt = document.forms["postform"]["excerpt"].value;
            const body = document.forms["postform"]["body"].value;

            let message = "";

            // Check for non-empty fields
            message += fieldNotEmptyMessage(title, "Title");
            message += fieldNotEmptyMessage(excerpt, "Excerpt");
            message += fieldNotEmptyMessage(body, "Body");

            // Check for length
            message += fieldLengthMessage(title, "Title", 255);
            message += fieldLengthMessage(excerpt, "Excerpt", 255);

            if (message != "") {
                alert(message);
                return false;
            }
        }
    </script>
</x-general.contentblock>
