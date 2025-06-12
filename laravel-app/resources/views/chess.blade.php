<!DOCTYPE html>
<html>
<head>
    <title>Live Chess Game</title>
    <link rel="stylesheet" href="{{ asset('css/chessboard.min.css') }}">
    <style>
        #board { width: 400px; margin: 20px auto; }
    </style>
</head>
<body>
    <div id="chessboard" style="width: 400px"></div>

    <!-- Local scripts instead of CDN -->
    <script src="{{ asset('js/chess.min.js') }}"></script>
    <script src="{{ asset('js/chessboard.min.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        window.Echo.private('action')
            .listen('MoveMade', (e) => {
                console.log('Move received:', e.move);
                // Update gameState and re-render board here
            });
    </script>

    
</body>

</html>
