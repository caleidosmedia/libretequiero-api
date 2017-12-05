<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Categoria;
use App\Clase;
use App\Orden;
use App\Familia;
use App\Genero;
use App\Color;
use Illuminate\Http\Request;

class AnimalesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $animales = Animal::whereIn('class', ['AMPHIBIA', 'AVES', 'MAMMALIA', 'REPTILIA'])
            ->whereRaw('(in_decreto_supremo = 1 or grupo IS NOT NULL)')
            ->sortBy('scientific_name')
            ->get();
        return view('animales.index', compact('animales'));
    }
    public function create()
    {
        $categorias = Categoria::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['clave'] => $item['valor']];
        })->toArray();
        $clases = Clase::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['valor'] => $item['valor']];
        })->toArray();
        $ordenes = Orden::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $familias = Familia::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $generos = Genero::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $colores = Color::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['clave'] => $item['valor']];
        })->toArray();
        for($i=1950;$i<2018;$i++)
            $years[$i] = $i;
        return view('animales.create', compact('categorias','clases','ordenes','familias','generos','years','colores'));
    }
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        $categorias = Categoria::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['clave'] => $item['valor']];
        })->toArray();
        $clases = Clase::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['valor'] => $item['valor']];
        })->toArray();
        $ordenes = Orden::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $familias = Familia::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $generos = Genero::orderBy('nombre','asc')->get()->mapWithKeys(function ($item) {
            return [$item['nombre'] => $item['nombre']];
        })->toArray();
        $colores = Color::orderBy('valor','asc')->get()->mapWithKeys(function ($item) {
            return [$item['clave'] => $item['valor']];
        })->toArray();
        for($i=1950;$i<2018;$i++)
            $years[$i] = $i;
        return view('animales.edit', compact('animal','categorias','clases','ordenes','familias','generos','years','colores'));
    }
    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect("animals");
    }
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->update($request->all());
        return redirect("animals");
    }
}
