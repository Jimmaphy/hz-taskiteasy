<x-layout.main title="{{ $post->title }}">
    <div class="flex flex-col">
        <x-general.successmessage />
        <x-post.extended :post="$post" />
    </div>
</x-layout.main>
