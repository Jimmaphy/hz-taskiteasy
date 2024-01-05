<div id="delete-button">
    <x-general.button>Delete</x-general.button>
</div>

<div id="delete-modal" class="fixed min-w-full min-h-full left-0 top-0 bg-black/50 flex place-content-center hidden">
    <div class="relative flex justify-center flex-col items-center selection:bg-red-500 selection:text-white m-5 text-center">
        <x-general.contentblock>
            <x-general.textWithTitle title="Deleting {{ $name }}">
                <p>Are you sure you want to delete {{ $name }}?</p>

                <div class="flex place-content-center">
                    <form id="remove-form" method="POST" action="{{ $route }}">
                        @csrf
                        @method('DELETE')

                        <x-general.button :class="'border-2 border-gray-300'" type="submit">Delete</x-general.button>
                    </form>

                    <x-general.button :class="'border-2 border-gray-300'">Cancel</x-general.button>
                </div>
            </x-general.textWithTitle>
        </x-general.contentblock>
    </div>
</div>

@push('scripts')
    <script>
        const removeButton = document.querySelector('#delete-button button');
        const deleteForm = document.getElementById('remove-form');
        const cancelButton = document.querySelector('#delete-modal button[type="button"]');
        const modal = document.querySelector('#delete-modal');

        removeButton.addEventListener('click', toggleModal);
        cancelButton.addEventListener('click', toggleModal);

        function toggleModal() {
            modal.classList.toggle('hidden');
        }
    </script>
@endpush
