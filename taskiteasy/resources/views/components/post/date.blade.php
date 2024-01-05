<p class="mb-2 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
    Created at: {{ $post->created_at->locale('en_GB')->isoFormat('LLL') }}

    @if ($post->updated_at->isoFormat('LLL') !== $post->created_at->isoFormat('LLL'))
        (Updated at: {{ $post->updated_at->locale('en_GB')->isoFormat('LLL') }})
    @endif
</p>
