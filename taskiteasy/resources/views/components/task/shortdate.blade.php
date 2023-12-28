@if ($task['completed_at'] !== null)
    <span class="ml-5">
        Completed at: {{ Carbon\Carbon::parse($task['completed_at'])->locale('en_GB')->isoFormat('LLL') }}
    </span>

@elseif ($task['updated_at'] !== $task['created_at'])
    <span class="ml-5">
        Updated at: {{ Carbon\Carbon::parse($task['updated_at'])->locale('en_GB')->isoFormat('LLL') }}
    </span>

@else
    <span class="ml-5">
        Created at: {{ Carbon\Carbon::parse($task['created_at'])->locale('en_GB')->isoFormat('LLL') }}
    </span>

@endif
