<x-general.contentblock>
    <form name="taskform"
        method="POST"
        action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}"
        onsubmit="return validateForm()">

        @csrf

        @if (isset($task))
            @method('PUT')
        @endif

        <x-form.input :name="'title'" :label="'Title'" :value="$task->title ?? ''" />
        <x-form.input :name="'description'" :label="'Description'" :value="$task->description ?? ''" />

        <x-form.select :name="'priority'" :label="'Priority'">
            <option value="1" {{ (isset($task->priority) ? $task->priority : old('priority')) == '1' ? 'selected' : '' }}>Normal</option>
            <option value="2" {{ (isset($task->priority) ? $task->priority : old('priority')) == '2' ? 'selected' : '' }}>Moderate</option>
            <option value="3" {{ (isset($task->priority) ? $task->priority : old('priority')) == '3' ? 'selected' : '' }}>Urgent</option>
            <option value="4" {{ (isset($task->priority) ? $task->priority : old('priority')) == '4' ? 'selected' : '' }}>Critical</option>
        </x-form.select>

        <x-form.number :name="'time_estimated'" :label="'Time Estimation (Hours)'" :value="$task->time_estimated ?? ''" />

        @if (isset($task))
            <x-form.number name="time_spent" label="Time Spent (Hours)" :value="$task->time_spent ?? ''" />
            <x-form.select name="state" label="State">
                <option value="new" {{ (isset($task->state) ? $task->state : old('state')) == 'new' ? 'selected' : '' }}>New</option>
                <option value="ongoing" {{ (isset($task->state) ? $task->state : old('state')) == 'ongoing' ? 'selected' : '' }}>Ongoing</option>
                <option value="complete" {{ (isset($task->state) ? $task->state : old('state')) == 'complete' ? 'selected' : '' }}>Complete</option>
            </x-form.select>
        @endif

        <x-form.addandcancelbuttons :href="route('tasks.index')" />
    </form>

    <x-form.validationfunctions />

    <script>
        function validateForm() {
            const title = document.forms["taskform"]["title"].value;
            const description = document.forms["taskform"]["description"].value;
            const priority = document.forms["taskform"]["priority"].value;
            const time_estimated = document.forms["taskform"]["time_estimated"].value;
            const time_spent = document.forms["taskform"]["time_spent"].value;
            const state = document.forms["taskform"]["state"].value;

            let message = "";

            // Check for non-empty fields
            message += fieldNotEmptyMessage(title, "Title");
            message += fieldNotEmptyMessage(description, "Description");
            message += fieldNotEmptyMessage(priority, "Priority");
            message += fieldNotEmptyMessage(time_estimated, "Time Estimation");
            message += fieldNotEmptyMessage(state, "State");

            // Check for length
            message += fieldLengthMessage(title, "Title", 255);
            message += fieldLengthMessage(description, "Description", 255);

            // Check is integer
            message += fieldIntegerMessage(priority, "Priority");
            message += fieldIntegerMessage(time_estimated, "Time Estimation");

            // Check number range
            message += fieldNumberRangeMessage(priority, "Priority", 1, 4);

            // Check for options
            message += fieldIsOption(state, "State", ["new", "ongoing", "complete"]);

            if (message != "") {
                alert(message);
                return false;
            }
        }
    </script>
</x-general.contentblock>
