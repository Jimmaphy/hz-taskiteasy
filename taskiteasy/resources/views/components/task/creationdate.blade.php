<p class="mb-4 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
    Created at: {{ Carbon\Carbon::parse($task->created_at)->locale('en_GB')->isoFormat('LLL') }}

    @if ($task->updated_at->isoFormat('LLL') !== $task->created_at->isoFormat('LLL'))
        (Updated at: {{ Carbon\Carbon::parse($task->updated_at)->locale('en_GB')->isoFormat('LLL') }})
    @endif
</p>
