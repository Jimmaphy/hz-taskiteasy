<x-layout.main title="{{ $task->title }}" flex-direction="flex-col">
    <x-general.successmessage />
    <x-task.extended :task="$task" />

    <div class="flex">
        <x-general.button :href="route('tasks.edit', ['task' => $task->id])">Edit</x-general.button>
        <x-form.deletebutton :route="route('tasks.destroy', ['task' => $task->id])" :name="$task->title" />
    </div>
</x-layout.main>
