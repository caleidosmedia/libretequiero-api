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
        Grupo::create(['clave' => 'Ranas','valor' => 'ranas','clase' => 'AMPHIBIA']);
        Grupo::create(['clave' => 'Loros grandes y guacamayos','valor' => 'loros-grandes-y-guacamayos','clase' => 'AVES']);
        Grupo::create(['clave' => 'Loros medianos y pequenos','valor' => 'loros-medianos-y-pequenos','clase' => 'AVES']);
        Grupo::create(['clave' => 'Coaties','valor' => 'coaties','clase' => 'MAMMALIA']);
        Grupo::create(['clave' => 'Felinos menores','valor' => 'felinos-menores','clase' => 'MAMMALIA']);
        Grupo::create(['clave' => 'Perezosos','valor' => 'perezosos','clase' => 'MAMMALIA']);
        Grupo::create(['clave' => 'Primates pequenos','valor' => 'primates-pequenos','clase' => 'MAMMALIA']);
        Grupo::create(['clave' => 'Primates grandes y medianos','valor' => 'primtes-grandes-y-medianos','clase' => 'MAMMALIA']);
        Grupo::create(['clave' => 'Caimanes','valor' => 'caimanes','clase' => 'REPTILIA']);
        Grupo::create(['clave' => 'Tortugas de rio','valor' => 'tortugas-de-rio','clase' => 'REPTILIA']);
        Grupo::create(['clave' => 'Tortugas terrestres','valor' => 'tortugas-terrestres','clase' => 'REPTILIA']);
    }
}