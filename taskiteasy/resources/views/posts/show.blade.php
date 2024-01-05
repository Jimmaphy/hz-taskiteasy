<x-layout.main title="{{ $post->title }}" flex-direction="flex-col">
    <x-general.successmessage />
    <x-post.extended :post="$post" />
    <x-general.button :href="route('posts.edit', ['post' => $post->id])">Edit</x-general.button>
</x-layout.main>
