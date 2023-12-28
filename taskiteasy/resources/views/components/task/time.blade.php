<span class="{{ $task['time_spent'] > $task['time_estimated'] ? 'text-red-400 font-bold' : '' }}">
    Hours spent: {{ $task['time_spent'] }}/{{ $task['time_estimated'] }}
</span>
