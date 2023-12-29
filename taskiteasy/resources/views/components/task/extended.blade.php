<x-general.contentblock>
    <x-task.title :task="$task" />

    <p class="mt-2 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
        <x-task.priority :task="$task" />
        <x-task.time :task="$task" />
        <x-task.completeddate :task="$task" />
    </p>

    <x-task.creationdate :task="$task" />
    <x-task.description :task="$task" />
</x-general.contentblock>
