<?php
 
namespace App\Events;
 
use App\Models\ChatRoom;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
 
class ChatRoomUpdated implements ShouldBroadcast
{
    /**
     * The order instance.
     *
     * @var \App\Models\ChatRoom
     */
    public $chatRoom;

    public function __construct(ChatRoom $chatRoom)
    {
        $this->chatRoom = $chatRoom;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\PrivateChannel
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat.room');
    }
}