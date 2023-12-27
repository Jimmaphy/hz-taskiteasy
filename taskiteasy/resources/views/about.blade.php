<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite('resources/css/app.css')
</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
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

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h1 class="text-xl font-semibold">About</h1>

            <h2 class="text-l font-semibold mt-4">Welcome to Our App</h2>
            <p>
                Discover our innovative app designed to transform your daily life and streamline
                your productivity. Our app is your perfect companion for task management, allowing
                you to regain control of your time and focus on what truly matters. Whether you're a
                busy professional, a student juggling classes and extracurricular activities, or
                simply looking to better organize your personal life, our app is here to help. With
                an intuitive and user-friendly interface, we've created a solution that empowers you
                to achieve your goals and dreams.
            </p>

            <h2 class="text-l font-semibold mt-4">Key Features</h2>
            <p>
                Our app boasts a wide range of features that make it an indispensable tool for
                anyone seeking enhanced productivity. You can create and manage tasks with ease, set
                deadlines, and prioritize them according to your needs. We've also incorporated a
                reminder system that ensures you never miss an important deadline or appointment. In
                addition, our app allows for collaboration with others, making it ideal for team
                projects and group activities. With cloud synchronization, you can access your tasks
                from anywhere, keeping you on top of your game at all times.
            </p>

            <h2 class="text-l font-semibold mt-4">Our Vision</h2>
            <p>
                At our core, we are driven by a vision of simplifying your life and enabling you to
                achieve your aspirations. We believe that effective task management can free up
                valuable time for personal growth, creativity, and enjoying life's pleasures. Our
                app is not just a tool but a partner in your journey to success. Join us as we
                revolutionize the way you work, study, and live. Together, we can make your dreams a
                reality, one task at a time.
            </p>
        </div>
    </div>
</body>
</html>
