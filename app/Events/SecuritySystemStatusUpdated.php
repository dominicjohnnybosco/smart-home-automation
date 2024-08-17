<?php

namespace App\Events;

use App\Models\SecuritySystem;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SecuritySystemStatusUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $system;

    /**
     * Create a new event instance.
     */
    public function __construct(SecuritySystem $system)
    {
        $this->system = $system;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('systems'),
        ];
    }
}
