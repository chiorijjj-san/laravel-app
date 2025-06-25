@include('layouts.head')
<div class="min-h-screen bg-gradient-to-br from-purple-500 via-pink-400 to-yellow-300 text-gray-900">
    <!-- Navigation Bar -->
    <nav class="bg-white/80 backdrop-blur-md shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-purple-700">✨ Escoffier Trivia</div>
            <ul class="flex space-x-6 text-sm font-medium">
                <li><a href="#" class="hover:text-purple-600 transition">Home</a></li>
                <li><a href="#" class="hover:text-purple-600 transition">Create Game</a></li>
                <li><a href="#" class="hover:text-purple-600 transition">Join Game</a></li>
                <li><a href="#" class="hover:text-purple-600 transition">Leaderboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 text-center">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-6xl font-extrabold mb-4 leading-tight text-white drop-shadow">🌟 Welcome to Escoffier Trivia</h1>
            <p class="text-lg text-white/90 max-w-2xl mx-auto">Experience AI-powered trivia in a magical world of elegance, wit, and fast-paced multiplayer action.</p>
        </div>
    </section>

    <!-- Action Cards -->
    <section class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 hover:shadow-xl transition transform hover:-translate-y-1 border border-white/40">
            <h2 class="text-3xl font-bold text-purple-700 mb-2">🎮 Create a New Game</h2>
            <p class="text-gray-700 mb-4">Customize your game session — choose AI difficulty, category, and how many players to challenge.</p>
            <a href="{{ route('game.create') }}" class="inline-block bg-purple-600 text-white px-5 py-2 rounded-full hover:bg-purple-700 transition">Start Game</a>
        </div>

        <div class="bg-white/90 backdrop-blur-sm rounded-2xl p-6 hover:shadow-xl transition transform hover:-translate-y-1 border border-white/40">
            <h2 class="text-3xl font-bold text-pink-600 mb-2">🚀 Join a Game</h2>
            <p class="text-gray-700 mb-4">Got a room code? Jump into a live trivia match and prove your knowledge.</p>
            <a href="{{ route('game.join') }}" class="inline-block bg-pink-600 text-white px-5 py-2 rounded-full hover:bg-pink-700 transition">Join Room</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-white/20 backdrop-blur-sm text-center text-sm text-white/90">
        ✨ Inspired by Escoffier | Powered by Laravel, Pusher, and AI.
    </footer>
</div>
@include('layouts.footer')
