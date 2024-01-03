@isset($href)
<a href="{{ $href ?? "#" }}">
@endisset
    <button type="{{ $type ?? "button" }}" class="p-3 m-3 scale-100 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none motion-safe:hover:scale-[1.1] transition-all duration-250 flex {{ $class ?? "" }}">
        <p class="flex-grow">
            {{ $slot }}
        </p>

        <x-general.arrow />
    </button>
@isset($href)
</a>
@endisset
