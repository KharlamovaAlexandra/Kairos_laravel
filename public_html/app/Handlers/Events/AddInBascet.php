<?php

namespace App\Handlers\Events;

use App\Bascet;
use App\Events\onChooseProduct;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddInBascet
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  onChooseProduct  $event
     * @return void
     */
    public function handle(onChooseProduct $event)
    {
        Bascet::create([
            'p_name'=> $event->p_name,
            'p_id'=> $event->p_id,
            'b_quantity'=> $event->b_quantity,
            'p_price'=> $event->p_price,
            'b_sum'=>$event->b_sum,
            'c_id'=>$event->c_id,
            'status_id'=>$event->status_id,
            'r_id'=>$event->r_id,
            'unit_id'=>$event->unit_id,
        ]);
    }
}
