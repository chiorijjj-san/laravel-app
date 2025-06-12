<?php 

Broadcast::channel('action', function ($user) {
    return true; // Or add auth logic
});


?>