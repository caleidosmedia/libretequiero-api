<?php 

namespace App\LibreTeQuiero;

use App\Animal;
use Eventviva\ImageResize;
use Illuminate\Support\Facades\Storage;

class ImageResizer {
    function resize() {
        set_time_limit(0);
        $animals = Animal::whereNotNull('image_url')->whereNotNull('in_decreto_supremo', '1')->get();

        for ($i=0; $i < count($animals); $i++) { 
            $animal = $animals[$i];
            $fileName = str_replace(' ', '_', $animal->scientific_name);
            $extension = pathinfo(parse_url($animal->image_url, PHP_URL_PATH), PATHINFO_EXTENSION);
            if(!in_array($extension, ['ogv', 'svg', 'tif'])) {
                $file = file_get_contents($animal->image_url);
                $filePath = Storage::disk('public')->put("animals/$fileName.$extension", $file);

                try {
                    $image = new ImageResize(storage_path('app/public') . "/animals/$fileName.$extension");
                    $image->resizeToWidth(300);
                    $image->save(storage_path('app/public') . "/animals/$fileName.jpg", IMAGETYPE_JPEG);
                }
                catch(\Exception $e) {

                }
            }
        }
    }
}