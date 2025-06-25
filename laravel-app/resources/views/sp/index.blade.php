@include('layouts.head')
<div class="min-h-screen bg-[#fdfcfb] text-gray-800">
    <!-- Navigation Bar -->
    <nav class="bg-white shadow-md fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-indigo-700">Escoffier Trivia</div>
            <ul class="flex space-x-6 text-sm font-medium">
                <li><a href="#" class="hover:text-indigo-600 transition">Home</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Create Game</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Join Game</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Leaderboard</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-28 pb-16 bg-gradient-to-br from-[#f6f1eb] to-[#ede6de] relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 text-center">
            <h1 class="text-5xl font-extrabold text-[#2c1e16] mb-4 leading-tight">🍷 Welcome to Escoffier Trivia</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">A refined, real-time trivia experience powered by AI and dressed in Genshin-style elegance. Play solo or compete with others — elevate your mind with each question.</p>
        </div>

        <!-- Decorative Element -->
        <div class="absolute top-0 right-0 w-64 opacity-10">
            <img src="/images/ornament.svg" alt="decorative swirl" class="w-full">
        </div>
    </section>

    <!-- Main Actions -->
    <section class="max-w-6xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="bg-white shadow-xl rounded-2xl p-6 hover:shadow-2xl transition border border-gray-200">
            <h2 class="text-2xl font-semibold text-[#4b3621] mb-2">🎮 Create a New Game</h2>
            <p class="text-gray-600 mb-4">Customize your game session — choose difficulty, category, and number of players. Ideal for party hosts or trivia masters!</p>
            <a href="{{ route('game.create') }}" class="inline-block bg-[#a1744f] text-white px-4 py-2 rounded-lg hover:bg-[#926645] transition">Start Game</a>
        </div>

        <div class="bg-white shadow-xl rounded-2xl p-6 hover:shadow-2xl transition border border-gray-200">
            <h2 class="text-2xl font-semibold text-[#4b3621] mb-2">🚀 Join a Game</h2>
            <p class="text-gray-600 mb-4">Have a room code? Join your friends or a public trivia session instantly.</p>
            <a href="{{ route('game.join') }}" class="inline-block bg-[#6e4f3a] text-white px-4 py-2 rounded-lg hover:bg-[#5e4030] transition">Join Room</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 bg-[#f6f1eb] text-center text-sm text-gray-500">
        ✨ Inspired by Escoffier and powered by Laravel, Pusher, and AI.
    </footer>
</div>
@include('layouts.footer')
