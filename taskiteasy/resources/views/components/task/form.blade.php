<x-general.contentblock>
    <form name="taskform" method="POST" action="{{ route('tasks.store') }}" onsubmit="return validateForm()">
        @csrf

        <x-form.input :name="'title'" :label="'Title'" />
        <x-form.input :name="'description'" :label="'Description'" />

        <x-form.select :name="'priority'" :label="'Priority'">
            <option value="1">Normal</option>
            <option value="2">Moderate</option>
            <option value="3">Urgent</option>
            <option value="4">Critical</option>
        </x-form.select>

        <x-form.number :name="'time_estimated'" :label="'Time Estimation (Hours)'" />
        <x-form.addandcancelbuttons :href="route('tasks.index')" />
    </form>

    <x-form.validationfunctions />

    <script>
        function validateForm() {
            const title = document.forms["taskform"]["title"].value;
            const description = document.forms["taskform"]["description"].value;
            const priority = document.forms["taskform"]["priority"].value;
            const time_estimated = document.forms["taskform"]["time_estimated"].value;

            let message = "";

            // Check for non-empty fields
            message += fieldNotEmptyMessage(title, "Title");
            message += fieldNotEmptyMessage(description, "Description");
            message += fieldNotEmptyMessage(priority, "Priority");
            message += fieldNotEmptyMessage(time_estimated, "Time Estimation");

            // Check for length
            message += fieldLengthMessage(title, "Title", 255);
            message += fieldLengthMessage(description, "Description", 255);

            // Check is integer
            message += fieldIntegerMessage(priority, "Priority");
            message += fieldIntegerMessage(time_estimated, "Time Estimation");

            // Check number range
            message += fieldNumberRangeMessage(priority, "Priority", 1, 4);

            if (message != "") {
                alert(message);
                return false;
            }
        }
    </script>
</x-general.contentblock>
