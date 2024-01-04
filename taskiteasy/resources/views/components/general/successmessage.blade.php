@if (session('success'))
    <div class="max-w-7xl p-6 m-3 lg:p-8 w-full scale-100 bg-green-100 border-2 border-green-400 text-green-700 dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
        {{ session('success') }}
    </div>
@endif
