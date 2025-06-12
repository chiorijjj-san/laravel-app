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
    <div id="board" style="width: 400px"></div>

    <!-- Local scripts instead of CDN -->
    <script src="{{ asset('js/chess.min.js') }}"></script>
    <script src="{{ asset('js/chessboard.min.js') }}"></script>

    <script>
        const game = new Chess();
        const board = Chessboard('board', {
            draggable: true,
            position: 'start',
            onDrop: function (source, target) {
                const move = game.move({
                    from: source,
                    to: target,
                    promotion: 'q'
                });

                if (move === null) return 'snapback';
            }
        });
    </script>
</body>

</html>
