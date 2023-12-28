<a
    href="{{ Route($route) }}"

    @if (Route::currentRouteNamed($route))
        class="bg-red-500 text-white rounded-md px-3 py-2 text-sm"
    @else
        class="text-gray-700 hover:bg-red-700 hover:text-white rounded-md px-3 py-2 text-sm"
    @endif>

    {{ $name }}
</a>
