<?php

namespace App\Listeners;

use App\Events\ContactImageStored;
use App\HasImagesVariant;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CreateContactPhotoVariants
{
    use HasImagesVariant;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ContactImageStored $event): void
    {
//        info($event->validated['image']);

        self::storeImagesVariant($event->validated['image']);
    }
}
