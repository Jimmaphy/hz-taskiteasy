@if ($task->completed_at !== null)
    <span class="ml-5">
        Completed at: {{ Carbon\Carbon::parse($task->completed_at)->locale('en_GB')->isoFormat('LLL') }}
    </span>
@endif
