<?php

namespace App\Http\Controllers;

use App\Denuncia;

class DenunciasController extends Controller
{
    public function index()
    {
        $denuncias = Denuncia::all();

        return view('denuncias1.index', compact('denuncias'));
    }

    public function view($id)
    {
        $denuncia = Denuncia::findOrFail($id);

        return view('denuncias1.view', compact('denuncia'));
    }

    public function map()
    {
        $denuncias = Denuncia::all();
        foreach ($denuncias as $denuncia) {
            $coordenadas = explode(',', $denuncia->coordenadas);
            $locations[] = ['id'=>$denuncia->id, 'lat'=>$coordenadas[0], 'lng'=>$coordenadas[1]];
        }
        $markers = json_encode($locations);

        return view('denuncias1.map', compact('markers'));
    }
}
