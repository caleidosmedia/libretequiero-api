<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;

class ProtegeDenunciasController extends Controller
{
    public function index() {
        $denuncias = Denuncia::all();
        return view('denuncias.index', compact('denuncias'));
    }

    public function store(Request $request) {
        try {
            $denuncia = Denuncia::create($request->all());
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo guardar las denuncia del usuario'], 500);
        }
        
        return response()->json(compact('denuncia'));
    }
}
