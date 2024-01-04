<x-layout.main title="{{ $task->title }}">
    <div class="flex flex-col">
        <x-general.successmessage />
        <x-task.extended :task="$task" />
    </div>
</x-layout.main>
