<?php

use App\Clase;
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
        Clase::create(['clave' => 'Anfibio', 'valor' => 'AMPHIBIA']);
        Clase::create(['clave' => 'Ave', 'valor' => 'AVES']);
        Clase::create(['clave' => 'Mamifero', 'valor' => 'MAMMALIA']);
        Clase::create(['clave' => 'Reptil', 'valor' => 'REPTILIA']);
        Clase::create(['clave' => '', 'valor' => 'ACTINOPTERYGII']);
        Clase::create(['clave' => '', 'valor' => 'CEPHALOPODA']);
        Clase::create(['clave' => '', 'valor' => 'MAGNOLIOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'INSECTA']);
        Clase::create(['clave' => '', 'valor' => 'LILIOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'CHONDRICHTHYES']);
        Clase::create(['clave' => '', 'valor' => 'POLYPODIOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'BIVALVIA']);
        Clase::create(['clave' => '', 'valor' => 'GASTROPODA']);
        Clase::create(['clave' => '', 'valor' => 'MALACOSTRACA']);
        Clase::create(['clave' => '', 'valor' => 'MAXILLOPODA']);
        Clase::create(['clave' => '', 'valor' => 'GNETOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'HOLOTHUROIDEA']);
        Clase::create(['clave' => '', 'valor' => 'LYCOPODIOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'JUNGERMANNIOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'MYXINI']);
        Clase::create(['clave' => '', 'valor' => 'ARACHNIDA']);
        Clase::create(['clave' => '', 'valor' => 'PINOPSIDA']);
        Clase::create(['clave' => '', 'valor' => 'CYCADOPSIDA']);
    }
}
