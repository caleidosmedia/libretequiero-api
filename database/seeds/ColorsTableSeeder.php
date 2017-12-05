<?php

use App\Color;
use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(['clave' => 'principalmente-verde', 'valor' => 'Verde']);
        Color::create(['clave' => 'negro', 'valor' => 'Negro']);
        Color::create(['clave' => 'amarillo', 'valor' => 'Amarillo']);
        Color::create(['clave' => 'rojo', 'valor' => 'Rojo']);
        Color::create(['clave' => 'claro', 'valor' => 'Claro']);
        Color::create(['clave' => 'cafe-oscuro', 'valor' => 'Cafe oscuro']);
        Color::create(['clave' => 'azul', 'valor' => 'Azul']);
        Color::create(['clave' => 'naranja', 'valor' => 'Naranja']);
        Color::create(['clave' => 'combinado', 'valor' => 'Combinado']);
    }
}
