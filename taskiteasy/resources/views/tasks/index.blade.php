<x-layout.main title="Tasks" flex-direction="flex-col">
    @foreach($tasks as $task)
        <x-task.small :task="$task"/>
    @endforeach
</x-layout.main>
