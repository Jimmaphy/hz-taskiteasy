<x-layout.main title="Posts" flex-direction="flex-col">
    <x-general.successmessage />
    <x-general.button :href="route('posts.new')">Create</x-general.button>

    @foreach($posts as $post)
        <x-post.small :post="$post"/>
    @endforeach
</x-layout.main>
