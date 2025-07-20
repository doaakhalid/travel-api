<?php

namespace App\Observers;

use App\Models\Travel;

class TravelObserver
{
    /**
     * Handle the Travel "creating" event.
     */
    public function creating(Travel $travel): void
    {
        //add id ti name to make it unique 
        $travel->slug = str($travel->name + $travel->id)->slug();
    }


}

