<?php

use App\Grupo;
use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create(['clave' => 'Ranas','valor' => 'ranas','clase_id' => 1]);
        Grupo::create(['clave' => 'Loros grandes y guacamayos','valor' => 'loros-grandes-y-guacamayos','clase_id' => 2]);
        Grupo::create(['clave' => 'Loros medianos y pequenos','valor' => 'loros-medianos-y-pequenos','clase_id' => 2]);
        Grupo::create(['clave' => 'Coaties','valor' => 'coaties','clase_id' => 3]);
        Grupo::create(['clave' => 'Felinos menores','valor' => 'felinos-menores','clase_id' => 3]);
        Grupo::create(['clave' => 'Perezosos','valor' => 'perezosos','clase_id' => 3]);
        Grupo::create(['clave' => 'Primates pequenos','valor' => 'primates-pequenos','clase_id' => 3]);
        Grupo::create(['clave' => 'Primates grandes y medianos','valor' => 'primtes-grandes-y-medianos','clase_id' => 3]);
        Grupo::create(['clave' => 'Caimanes','valor' => 'caimanes','clase_id' => 4]);
        Grupo::create(['clave' => 'Tortugas de rio','valor' => 'tortugas-de-rio','clase_id' => 4]);
        Grupo::create(['clave' => 'Tortugas terrestres','valor' => 'tortugas-terrestres','clase_id' => 4]);
    }
}