<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class onChooseProduct
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($p_name,$p_id,$b_quantity,$p_price,$b_sum,$c_id,$status_id,$r_id,$unit_id)
    {
        $this->p_name =$p_name;
        $this->p_id =$p_id;
        $this->b_quantity =$b_quantity;
        $this->p_price = $p_price;
        $this->b_sum =$b_sum;
        $this-> c_id = $c_id;
        $this->status_id =$status_id;
        $this->r_id=$r_id;
        $this->unit_id = $unit_id;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
