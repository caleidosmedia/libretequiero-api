<?php

namespace App\Http\Controllers\Api;

use JWTAuth;
use App\Denuncia;
use App\Http\Controllers\Controller;

class DenunciasController extends Controller
{
    private $user;

    public function __construct()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => 'user_not_found'], 404);
            }
            $this->user = $user;
        } catch (\Exception $e) {
        }
    }

    public function index()
    {
        try {
            $data = Denuncia::all();
        } catch (\Exception $e) {
            return response()->json(['error' => 'No se pudo obtener las denuncias'], 500);
        }

        return response()->json(compact('data'));
    }
}
