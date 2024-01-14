<x-layout.main title="{{ $post->title }}" flex-direction="flex-col">
    <x-general.successmessage />
    <x-post.extended :post="$post" />

    <div class="flex">
        <x-general.button :href="route('posts.edit', ['post' => $post->id])">Edit</x-general.button>
        <x-form.deletebutton :route="route('posts.destroy', ['post' => $post->id])" :name="$post->title" />
    </div>
</x-layout.main>
