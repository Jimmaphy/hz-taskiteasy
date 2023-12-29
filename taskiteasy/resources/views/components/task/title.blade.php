<h3 class="text-xl font-semibold mb-1 text-gray-900 dark:text-white">
    @switch ($task->state)
        @case ('new') <i class="fa-regular fa-circle-check mr-2" style="color: #969646;"></i> @break
        @case ('complete') <i class="fa-solid fa-circle-check mr-2" style="color: #469646;"></i> @break
        @default <i class="fa-regular fa-circle-check mr-2"></i>
    @endswitch

    {{ $task->title }}
</h3>
