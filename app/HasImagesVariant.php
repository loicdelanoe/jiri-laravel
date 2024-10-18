<?php

namespace App;

use App\Http\Requests\ContactStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

trait HasImagesVariant
{
    static function storeImagesVariant(ContactStoreRequest $request): string
    {
        // Store original picture
        $path = $request->file('image')->store('contacts/' . Auth::id() . '/original');

        // Get picture from form
        $avatar = $request->file('image');

        // Get sizes from config file
        $sizes = Config::get('photos.sizes');
        $image = Image::read($avatar);

        foreach ($sizes as $size => $value) {
            // Avoid original
            if (!is_int($value)) {
                continue;
            }

            // Define the directory where the image will be saved
            $directory = 'contacts/' . Auth::id() . '/' . $size . '/';

            if (!Storage::exists($directory)) {
                Storage::makeDirectory($directory);
            }

            Storage::put($directory . $avatar->hashName(), $image->encode());
        }

        return $path;
    }
}
