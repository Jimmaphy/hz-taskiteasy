@switch ($task['priority'])
    @case (2) <span class="text-blue-400 mr-5">Priority: Moderate</span> @break
    @case (3) <span class="text-yellow-400 mr-5">Priority: Urgent</span> @break
    @case (4) <span class="text-red-400 mr-5">Priority: Critical</span> @break
    @default <span class="mr-5">Priority: None</span>
@endswitch
