<div class="max-w-7xl p-6 m-3 lg:p-8 w-full scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
    <x-task.title :task="$task" />

    <p class="mt-2 text-gray-400 dark:text-gray-300 text-sm leading-relaxed">
        <x-task.priority :task="$task" />
        <x-task.time :task="$task" />
        <x-task.completeddate :task="$task" />
    </p>

    <x-task.creationdate :task="$task" />
    <x-task.description :task="$task" />
</div>
