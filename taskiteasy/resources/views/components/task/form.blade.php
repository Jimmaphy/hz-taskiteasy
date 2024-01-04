<x-general.contentblock>
    <form method="POST" action="{{ route('tasks.create') }}">
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
        <x-form.addandcancelbuttons :href="route('tasks')" />
    </form>
</x-general.contentblock>
