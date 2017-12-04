<?php

use App\Animal;
use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $client = new GuzzleHttp\Client();
        $response = $client->request('GET', 'http://apiv3.iucnredlist.org/api/v3/country/getspecies/PE?token='.env('UICN_TOKEN'));

        $response = $response->getBody();

        $response = json_decode($response);

        $animals = $response->result;

        foreach ($animals as $animal) {
            DB::table('animals')->insert([
                'taxonid' => $animal->taxonid,
                'scientific_name' => $animal->scientific_name,
                'category' => $animal->category,
            ]);
        }

        // Detalles de animales
        $animals = Animal::all();

        foreach ($animals as $animal) {
            $url = 'http://apiv3.iucnredlist.org/api/v3/species/'.rawurlencode($animal->scientific_name).'?token='.env('UICN_TOKEN');

            $response = $client->request('GET', $url);
            $response = $response->getBody();
            $response = json_decode($response);
            $animalDetails = $response->result[0];

            $animal->kingdom = $animalDetails->kingdom;
            $animal->class = $animalDetails->class;
            $animal->order = $animalDetails->order;
            $animal->family = $animalDetails->family;
            $animal->genus = $animalDetails->genus;
            $animal->authority = $animalDetails->authority;
            $animal->published_year = $animalDetails->published_year;
            $animal->marine_system = $animalDetails->marine_system;
            $animal->freshwater_system = $animalDetails->freshwater_system;
            $animal->terrestrial_system = $animalDetails->terrestrial_system;
            $animal->depth_upper = $animalDetails->depth_upper;
            $animal->depth_lower = $animalDetails->depth_lower;

            $animal->save();
        }

        // Nombre comun del animal

        $animals = Animal::all();

        foreach ($animals as $animal) {
            $url = 'http://apiv3.iucnredlist.org/api/v3/species/common_names/'.rawurlencode($animal->scientific_name).'?token='.env('UICN_TOKEN');

            $response = $client->request('GET', $url);
            $response = $response->getBody();
            $response = json_decode($response);

            $animalCommonNames = collect($response->result)->filter(function ($value) {
                return $value->language == 'spa';
            });

            if ($animalCommonNames->isNotEmpty()) {
                $animal->common_name = $animalCommonNames->first()->taxonname;
                $animal->save();
            }
        }

        // Buscar imagenes en wikipedia
        $animals = Animal::all();

        foreach ($animals as $animal) {
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
}
