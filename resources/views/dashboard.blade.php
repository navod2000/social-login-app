<x-app-layout>
    <head>
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>

    <header class="bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold text-white font-sans">Welcome, {{ Auth::user()->name }}</h1>

                <!-- Navigation Links -->
                <nav class="flex space-x-4">
                    <a href="/about" class="nav-link text-white hover:text-gray-200">About Me</a>
                    <a href="/contact" class="nav-link text-white hover:text-gray-200">Contact Me</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 px-4">
        <div class="bg-gray-700 shadow-lg rounded-lg p-6 flex items-center justify-center h-96">
            <p class="text-black-400 text-center font-Arial text-lg">You're successfully logged in, {{ Auth::user()->name }}!</p>
            <div class="mt-4">
                <p class="text-white">Your email: {{ Auth::user()->email }}</p>
            </div>
        </div>
    </main>
</x-app-layout>
