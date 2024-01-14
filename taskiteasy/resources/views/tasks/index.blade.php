<x-layout.main title="Tasks" flex-direction="flex-col">
    <x-general.button :href="route('tasks.create')">Create</x-general.button>

    @foreach($tasks as $task)
        <x-task.small :task="$task"/>
    @endforeach
</x-layout.main>
