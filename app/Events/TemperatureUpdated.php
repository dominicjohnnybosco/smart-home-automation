<?php

namespace App\Events;

use App\Models\TemperatureSensor;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TemperatureUpdated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $sensor;

    /**
     * Create a new event instance.
     */
    public function __construct(TemperatureSensor $sensor)
    {
        $this->sensor = $sensor;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('sensors'),
        ];
    }
}
