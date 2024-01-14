<x-layout.main title="Projects" flex-direction="flex-col">
    <x-general.successmessage />
    <x-general.button :href="route('projects.create')">Create</x-general.button>

    @foreach($projects as $project)
        <x-project.small :project="$project"/>
    @endforeach
</x-layout.main>
