<x-app-layout>
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <div class="flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-900 font-sans">Dashboard</h1>

                <!-- Settings Icon Button -->
                <button class="text-gray-600 hover:text-gray-900 focus:outline-none focus:text-gray-900">
                    <!-- SVG Icon -->
                </button>

                <!-- Logout Button -->
                <form method="POST" action="{{ route('logout') }}" class="ml-4">
                    @csrf
                    <button type="submit" class="bg-red-500 text-white font-bold py-2 px-4 rounded hover:bg-red-700">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 px-4">
        <div class="bg-white shadow rounded-lg p-6 flex items-center justify-center h-96">
            <p class="text-gray-600 text-center font-sans">You're successfully logged in!</p>
        </div>
    </main>
</x-app-layout>
