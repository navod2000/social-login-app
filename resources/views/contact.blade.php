<x-app-layout>
    <header class="bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4">
            <h1 class="text-2xl font-semibold text-white">Contact Me</h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto py-6 px-4">
        <div class="bg-gray-700 shadow-lg rounded-lg p-6">
            <h2 class="text-xl font-bold text-white mb-4">Get in Touch</h2>

            @if(session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-gray-300">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 rounded bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="email" class="block text-gray-300">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 rounded bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">
                    @error('email')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="message" class="block text-gray-300">Message</label>
                    <textarea id="message" name="message" rows="5"
                        class="w-full px-4 py-2 rounded bg-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('message') }}</textarea>
                    @error('message')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <button type="submit"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Send Message</button>
                </div>
            </form>
        </div>
    </main>
</x-app-layout>
