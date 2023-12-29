<p class="mb-2 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
    Created at: {{ Carbon\Carbon::parse($post->created_at)->locale('en_GB')->isoFormat('LLL') }}

    @if ($post->updated_at !== $post->created_at)
        (Updated at: {{ Carbon\Carbon::parse($post->updated_at)->locale('en_GB')->isoFormat('LLL') }})
    @endif
</p>
