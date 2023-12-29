<x-layout.main title="Posts" flex-direction="flex-col">
    @foreach($posts as $post)
        <x-post.small :post="$post"/>
    @endforeach
</x-layout.main>
