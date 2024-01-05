<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ isset($title) ? $title . ' - TaskITEasy' : 'TaskITEasy' }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Packages -->
    <script src="https://kit.fontawesome.com/fd4690ebbf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/5jlufh6pvnoekjnwlywgcl5f5n5nk1rh5vf9ap1g5pudislo/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 flex flex-col">
    <nav>
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 items-center justify-between">
                <div class="flex flex-1 items-center justify-center">
                    <div class="flex flex-shrink-0 items-center">
                        <i class="fa-solid fa-list-check"></i>
                    </div>

                    <div class="ml-6">
                        <div class="flex space-x-4">
                            <x-nav.navitem :route="'index'" :name="'Home'" />
                            <x-nav.navitem :route="'tasks'" :name="'Tasks'" />
                            <x-nav.navitem :route="'posts'" :name="'Posts'" />
                            <x-nav.navitem :route="'about'" :name="'About'" />
                        </div>
                    </div>
                </div>

                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
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
                </div>
            </div>
        </div>
    </nav>

    <div class="relative flex justify-center {{ $flexDirection ?? '' }} items-center selection:bg-red-500 selection:text-white flex-grow m-5">
        {{ $slot }}
    </div>

    @stack('scripts')
</body>
</html>
