<?php

namespace App\Http\Controllers;

use App\Animal;
use App\Categoria;
use App\Clase;

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
        return view('animales.create', compact('categorias','clases'));
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
        Vehiculo::create($request->all());
        return redirect("admin/vehiculos");
    }
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::findOrFail($id);
        $vehiculo->update($request->all());
        return redirect("admin/vehiculos");
    }
}
