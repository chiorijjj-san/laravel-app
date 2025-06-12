<?php 

Broadcast::channel('action', function ($user) {
    return true; // Or add auth logic
});

Broadcast::channel('chess.game', function ($user) {
    return true; // Allow all users for now
});

?>