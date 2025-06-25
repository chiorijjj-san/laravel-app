@include('layouts.head')
<div class="min-h-screen bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700 text-gray-100">
    <!-- Navigation Bar -->
    <nav class="bg-gray-900/80 backdrop-blur-md shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-amber-400">Escoffier Trivia</div>
            <ul class="flex space-x-6 text-sm font-medium">
                <li><a href="#" class="hover:text-amber-400 transition">Home</a></li>
                <li><a href="#" class="hover:text-amber-400 transition">Create Game</a></li>
                <li><a href="#" class="hover:text-amber-400 transition">Join Game</a></li>
                <li><a href="#" class="hover:text-amber-400 transition">Leaderboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-16 text-center relative">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-6xl font-extrabold mb-4 leading-tight text-white drop-shadow">🧠 Escoffier Trivia Arena</h1>
            <p class="text-lg text-gray-300 max-w-2xl mx-auto">Sharpen your mind in a real-time, AI-powered trivia challenge built for warriors of wit and champions of lore.</p>
        </div>

        <!-- Character Placeholder -->
        <div class="absolute right-4 bottom-4 md:right-16 md:bottom-8 lg:right-32 lg:bottom-10 opacity-90 pointer-events-none">
            <!-- Replace this image with your character ambassador -->
            <img src="{{ asset('images/ambassador.png') }}" alt="Trivia Ambassador Character" class="w-52 md:w-64 lg:w-72 drop-shadow-xl">
        </div>
    </section>

    <!-- Action Cards -->
    <section class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-gray-800/90 backdrop-blur-sm rounded-2xl p-6 hover:shadow-xl transition transform hover:-translate-y-1 border border-gray-700">
            <h2 class="text-3xl font-bold text-amber-400 mb-2">🎮 Create a New Game</h2>
            <p class="text-gray-300 mb-4">Host your own match — pick the AI difficulty, category, and rally your party.</p>
            <a href="" class="inline-block bg-amber-500 text-gray-900 px-5 py-2 rounded-full hover:bg-amber-400 transition">Start Game</a>
        </div>

        <div class="bg-gray-800/90 backdrop-blur-sm rounded-2xl p-6 hover:shadow-xl transition transform hover:-translate-y-1 border border-gray-700">
            <h2 class="text-3xl font-bold text-cyan-400 mb-2">🚀 Join a Game</h2>
            <p class="text-gray-300 mb-4">Have a code? Jump into a round and test your skills.</p>
            <a href="" class="inline-block bg-cyan-500 text-gray-900 px-5 py-2 rounded-full hover:bg-cyan-400 transition">Join Room</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-gray-900/60 backdrop-blur-sm text-center text-sm text-gray-400">
        ⚔️ Powered by Laravel, Pusher, and AI — honor your intellect.
    </footer>
</div>
@include('layouts.footer')
