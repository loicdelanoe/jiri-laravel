<?php

namespace App;

use App\Http\Requests\ContactStoreRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

trait HasImagesVariant
{
    public function storeImagesVariant(string $originalPath): void
    {
        // Get sizes from config file
        $sizes = Config::get('photos.sizes');

        foreach ($sizes as $size => $value) {
            // Avoid original
            if (!is_int($value)) {
                continue;
            }
            $image = Image::read(Storage::get($originalPath));

            $image->scale($value);

            $filePath = str_replace('original', $size, $originalPath);
            $directoryPath = dirname($filePath);

            if (!Storage::exists($directoryPath)) {
                Storage::makeDirectory($directoryPath);
            }

            Storage::put($filePath, $image->encode());
        }

//        return $path;
    }
}
