<?php

namespace App\LibreTeQuiero;

use App\Animal;

class WikimediaImageFinder {

    public function find(Animal $animal) {
        try {
            $url = 'https://es.wikipedia.org/w/api.php?action=query&titles='.rawurlencode($animal->scientific_name).'&prop=images&format=json';

            $response = $client->request('GET', $url);
            $response = $response->getBody();
            $response = json_decode($response);

            $images = reset($response->query->pages)->images;
            $animalImages = [];
            foreach ($images as $image) {
                if ($image->title != 'Archivo:Commons-logo.svg'
                    && $image->title != 'Archivo:Wikispecies-logo.svg'
                    && $image->title != 'Archivo:Symbol question.svg'
                    && $image->title != 'Archivo:Status iucn3.1 LC es.svg'
                    && $image->title != 'Archivo:Status iucn3.1 NT es.svg'
                    && $image->title != 'Archivo:Status iucn3.1 CR es.svg'
                    && $image->title != 'Archivo:Status iucn3.1 EN es.svg'
                    && $image->title != 'Archivo:Status iucn3.1 VU es.svg'
                    && $image->title != 'Archivo:Status none DD.svg'
                    && strpos($image->title, 'Falta') === false
                    && strpos($image->title, 'area') === false
                    && strpos($image->title, 'map') === false
                    && strpos($image->title, 'Map') === false
                    && strpos($image->title, 'Area') === false) {
                    array_push($animalImages, $image);
                }
            }

            $imageTitle = $animalImages[0]->title;

            $url = 'https://es.wikipedia.org/w/api.php?action=query&titles='.rawurlencode($imageTitle).'&prop=imageinfo&iiprop=url&format=json';

            $response = $client->request('GET', $url);
            $response = $response->getBody();
            $response = json_decode($response);

            $imageUrl = reset($response->query->pages)->imageinfo[0]->url;

            $animal->image_url = $imageUrl;
            $animal->save();
        } catch (\Exception $e) {
        }
    }

}