<x-layout.main title="{{ $project->title }}" flex-direction="flex-col">
    <x-general.successmessage />
    <x-project.extended :project="$project" />

    <div class="flex">
        <x-general.button :href="route('projects.edit', ['project' => $project->id])">Edit</x-general.button>
        <x-form.deletebutton :route="route('projects.destroy', ['project' => $project->id])" :name="$project->title" />
    </div>
</x-layout.main>
