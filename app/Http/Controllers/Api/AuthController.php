<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\User;

class AuthController extends Controller
{
   	public function login(Request $request)
    {
        $credentials = ['email' => $request->email,'password' => $request->password];
        try {
            // si los datos de login no son correctos
            if (! $data = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 404);
            }
        } catch (JWTException $e) {
            // si no se puede crear el token
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
 
        // todo bien devuelve el token
        return response()->json(compact('data'));
    }
    public function logout()
    {
        $data = JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(compact('data'));
    }
}
