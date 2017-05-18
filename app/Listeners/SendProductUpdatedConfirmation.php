<?php

namespace App\Listeners;

use App\Event\ProductUpdated;
use App\Mail\ProductUpdated as ProductUpdatedMail;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class SendProductUpdatedConfirmation
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
     * @param  ProductUpdated  $event
     * @return void
     */
    public function handle(ProductUpdated $event)
    {
        Mail::to('Arcoders@admin.com')
            ->send(new ProductUpdatedMail($event->product));
    }
}
