<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denuncia;

class DenunciasController extends Controller
{
    public function store(Request $request)
    {
        try {
            $atributos = $request->all();
            $denuncia = Denuncia::create($atributos);
            if ($denuncia) {
                /*$tokens = User::where('type_document', 2)->pluck('device')->toArray();
                if ($tokens) {
                    $title = 'Robo vehiculo';
                    $msg = $request->placa;
                    $this->pushService->send($tokens, $title, $msg);
                }*/
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        $data = $denuncia;
        return response()->json(compact('data'));
    }
}
