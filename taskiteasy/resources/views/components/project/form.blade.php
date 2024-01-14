<x-general.contentblock>
    <form name="projectform"
        method="POST"
        action="{{ isset($project) ? route('projects.update', ['project' => $project->id]) : route('projects.store') }}"
        onsubmit="return validateForm()">

        @csrf

        @if (isset($project))
            @method('PUT')
        @endif

        <x-form.input :name="'title'" :label="'Title'" :value="$project->title ?? ''" />
        <x-form.textarea :name="'description'" :label="'Description'" :value="$project->description ?? ''" />
        <x-form.addandcancelbuttons :href="isset($project) ? route('projects.show', ['project' => $project->id]) : route('projects.index')"/>
    </form>

    <x-form.validationfunctions />

    <script>
        function validateForm() {
            const title = document.forms["projectform"]["title"].value;
            const description = document.forms["projectform"]["description"].value;

            let message = "";

            // Check for non-empty fields
            message += fieldNotEmptyMessage(title, "Title");
            message += fieldNotEmptyMessage(description, "Description");

            // Check for length
            message += fieldLengthMessage(title, "Title", 255);

            if (message != "") {
                alert(message);
                return false;
            }
        }
    </script>
</x-general.contentblock>
