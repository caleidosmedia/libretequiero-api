<?php

namespace App\Http\Controllers;

use App\Denuncia;

class DenunciasController extends Controller
{
    public function index()
    {
        $denuncias = Denuncia::all()->sortByDesc('id');
        return view('denuncias1.index', compact('denuncias'));
    }
    public function view($id)
    {
        $denuncia = Denuncia::findOrFail($id);
        return view('denuncias1.view', compact('denuncia'));
    }
}
