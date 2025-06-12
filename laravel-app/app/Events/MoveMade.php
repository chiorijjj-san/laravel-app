<?php
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Broadcasting\PrivateChannel;

class MoveMade implements ShouldBroadcast
{
    use InteractsWithSockets;

    public $move;

    public function __construct($move)
    {
        $this->move = $move;
    }

    public function broadcastOn()
    {
        return new PrivateChannel('action');
    }

    public function broadcastAs()
    {
        return 'move.made';
    }
}

?>