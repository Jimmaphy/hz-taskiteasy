<p class="mb-2 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
    Created at: {{ $project->created_at->locale('en_GB')->isoFormat('LLL') }}

    @if ($project->updated_at->isoFormat('LLL') !== $project->created_at->isoFormat('LLL'))
        (Updated at: {{ $project->updated_at->locale('en_GB')->isoFormat('LLL') }})
    @endif
</p>
