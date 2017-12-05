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
        $animales = Animal::all()->sortBy('scientific_name');
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
        $vehiculo = Vehiculo::findOrFail($id);
        $clientes = Role::where('name',Role::CLIENTE_TEXT)->first()->users()->orderBy('email')->get()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['email']];
        })->toArray();
        $tipos = Tipo::all()->mapWithKeys(function ($item) {
            return [$item['id'] => $item['nombre']];
        })->toArray();
        return view('admin.vehiculos.edit', compact('vehiculo','clientes','tipos'));
    }
    public function store(Request $request)
    {
        Animal::create($request->all());
        return redirect("animals");
    }
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());
        return redirect("admin/vehiculos");
    }
}
