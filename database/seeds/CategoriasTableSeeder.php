<?php

use App\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['clave' => 'EX', 'valor' => 'Extinta']);
        Categoria::create(['clave' => 'EW', 'valor' => 'Extinta en estado silvestre']);
        Categoria::create(['clave' => 'CR', 'valor' => 'En peligro crítico']);
        Categoria::create(['clave' => 'EN', 'valor' => 'En peligro']);
        Categoria::create(['clave' => 'VU', 'valor' => 'Vulnerable']);
        Categoria::create(['clave' => 'NT', 'valor' => 'Casi amenazada']);
        Categoria::create(['clave' => 'LC', 'valor' => 'Preocupación menor']);
        Categoria::create(['clave' => 'DD', 'valor' => 'Datos insuficientes']);
        Categoria::create(['clave' => 'NE', 'valor' => 'No evaluado']);
    }
}
