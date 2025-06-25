<link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
<div class="min-h-screen bg-gradient-to-br from-indigo-600 to-purple-800 text-white flex flex-col items-center justify-center p-6">
    <div class="max-w-4xl w-full">
        <div class="text-center mb-10">
            <h1 class="text-5xl font-bold mb-4">🤖 Real-Time AI Trivia Game</h1>
            <p class="text-lg text-white/90">Challenge friends or play solo in live trivia matches, powered by AI-generated questions and Pusher-driven real-time play.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Create Game -->
            <div class="bg-white text-gray-800 rounded-2xl shadow-lg p-6 hover:scale-105 transition-transform duration-200 cursor-pointer group">
                <h2 class="text-2xl font-semibold mb-2 group-hover:text-indigo-600">🎮 Create a New Game</h2>
                <p class="text-gray-600 mb-4">Start a fresh trivia battle. Customize your AI difficulty, number of players, or category.</p>
                <a href="{{ route('game.create') }}" class="inline-block bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">Start Game</a>
            </div>

            <!-- Join Game -->
            <div class="bg-white text-gray-800 rounded-2xl shadow-lg p-6 hover:scale-105 transition-transform duration-200 cursor-pointer group">
                <h2 class="text-2xl font-semibold mb-2 group-hover:text-purple-600">🚀 Join a Game</h2>
                <p class="text-gray-600 mb-4">Enter a room code to join a live trivia match with friends or strangers.</p>
                <a href="{{ route('game.join') }}" class="inline-block bg-purple-600 text-white px-4 py-2 rounded-lg hover:bg-purple-700 transition">Join Room</a>
            </div>
        </div>

        <!-- Footer / Placeholder Text -->
        <div class="mt-16 text-center text-white/70">
            <p>✨ Powered by Laravel, Pusher, and AI — your next favorite party game.</p>
        </div>
    </div>
</div>
