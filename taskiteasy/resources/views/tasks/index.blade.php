<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/fd4690ebbf.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
<div class="relative sm:flex sm:flex-col sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
            @else
                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
            @endauth
        </div>
    @endif

    @foreach($tasks as $task)
        <div class="max-w-7xl p-6 lg:p-8 w-full">
            <a href="{{ url('/tasks/' . $task['id']) }}">
                <h3 class="text-xl font-semibold mb-1 hover:text-gray-500">
                    @switch ($task['state'])
                        @case ('new') <i class="fa-regular fa-circle-check" style="color: #969646;"></i> @break
                        @case ('complete') <i class="fa-solid fa-circle-check" style="color: #469646;"></i> @break
                        @default <i class="fa-regular fa-circle-check"></i>
                    @endswitch
                    {{ $task['title'] }}
                </h3>
            </a>

            <p class="mb-1">
                @switch ($task['priority'])
                    @case (2) <span class="text-blue-800 mr-5">Priority: Moderate</span> @break
                    @case (3) <span class="text-yellow-800 mr-5">Priority: Urgent</span> @break
                    @case (4) <span class="text-red-800 mr-5">Priority: Critical</span> @break
                    @default <span class="text-gray-800 mr-5">Priority: None</span>
                @endswitch

                <span class="{{ $task['time_spent'] > $task['time_estimated'] ? 'text-red-800 font-bold' : 'text-gray-800' }}">
                Hours spent: {{ $task['time_spent'] }}/{{ $task['time_estimated'] }}
            </span>

                @if ($task['completed_at'] !== null)
                    <span class="text-gray-800 ml-5">
                        Completed at: {{ Carbon\Carbon::parse($task['completed_at'])->locale('en_GB')->isoFormat('LLL') }}
                    </span>
                @elseif ($task['updated_at'] !== $task['created_at'])
                    <span class="text-gray-800 ml-5">
                        Updated at: {{ Carbon\Carbon::parse($task['updated_at'])->locale('en_GB')->isoFormat('LLL') }}
                    </span>
                @else
                    <span class="text-gray-800 ml-5">
                        Created at: {{ Carbon\Carbon::parse($task['created_at'])->locale('en_GB')->isoFormat('LLL') }}
                    </span>
                @endif
            </p>
        </div>
    @endforeach
</div>
</body>
</html>
