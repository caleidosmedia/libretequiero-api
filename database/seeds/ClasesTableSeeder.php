<?php

use App\User;
use Illuminate\Database\Seeder;

class ClasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clase::create(['clave' => 'Anfibio','valor' => 'AMPHIBIA']);
        Clase::create(['clave' => 'Ave','valor' => 'AVES']);
        Clase::create(['clave' => 'Mamifero','valor' => 'MAMMALIA']);
        Clase::create(['clave' => 'Reptil','valor' => 'REPTILIA']);
    }
}
