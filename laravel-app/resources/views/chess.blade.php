<!DOCTYPE html>
<html>
<head>
    <title>Live Chess Game</title>
    <link rel="stylesheet" href="https://unpkg.com/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.css">
    <style>
        #board { width: 400px; margin: 20px auto; }
    </style>
</head>
<body>

<div id="board"></div>

<script src="https://cdn.jsdelivr.net/npm/chess.js@1/chess.min.js"></script>
<script src="https://unpkg.com/chessboardjs@1.0.0/dist/chessboard-1.0.0.min.js"></script>
<script src="/js/app.js"></script> <!-- your compiled JS -->
<script>
    const game = new Chess();
    const board = Chessboard('board', {
        draggable: true,
        position: 'start',
        onDrop: (source, target) => {
            const move = game.move({
                from: source,
                to: target,
                promotion: 'q'
            });

            if (move === null) return 'snapback';

            fetch('/move', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ move: `${source}${target}` })
            });
        }
    });

    Echo.private('chess.game')
        .listen('.move.made', (e) => {
            const from = e.move.substring(0, 2);
            const to = e.move.substring(2, 4);
            game.move({ from: from, to: to, promotion: 'q' });
            board.position(game.fen());
        });
</script>

</body>
</html>
