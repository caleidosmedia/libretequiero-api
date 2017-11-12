<?php

use App\Animal;
use Illuminate\Database\Seeder;

class WSCAnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bird = Animal::where('scientific_name', 'Amazona amazonica')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Loro alinaranja, loro mejilla amarilla';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Amazona festiva')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Loro lomo rojo, loro vincha roja';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Amazona farinosa')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Ushpa loro, loro harinoso';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara militaris')->first();
        $bird->color = 'principalmente-verde';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo militar, guacamayo verde';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara ararauna')->first();
        $bird->color = 'amarillo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo azul y amarillo';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara chloropterus')->first();
        $bird->color = 'rojo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo púrpura, guacamayo rojo y verde';
        $bird->save();

        $bird = Animal::where('scientific_name', 'Ara macao')->first();
        $bird->color = 'rojo';
        $bird->grupo = 'loros-grandes-y-guacamayos';
        $bird->common_name = 'Guacamayo escarlata, guacamayo rojo ';
        $bird->save();

    }
}
