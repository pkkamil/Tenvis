<?php

namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Broadcasting\PrivateChannel;

class Notify implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $message;
    public $user_id;
    public $sender;
    public $title;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user_id, $title, $message) {
        $this->user_id = $user_id;
        $this->title = $title;
        $this->message = $message;
        $this->sender  = Auth::id();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\PrivateChannel
     */
    public function broadcastOn() {
        return new PrivateChannel('App.User.'.$this -> user_id);
    }

}
