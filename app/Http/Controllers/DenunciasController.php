<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denuncia;
use Illuminate\Support\Facades\Log;

class DenunciasController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            Log::info(print_r($data,true));
          $dataResponse = array();
           if($data["result"]["metadata"]["intentName"] == "Default Welcome Intent"){
              switch ($data["result"]["fulfillment"]["speech"]) {
                  case "Que grupo":
                      $respond = "grupo";
                      $dataResponse['facebook'] = array();
                      $lorem = array();
                      $lorem['content_type'] = 'text';
                      $lorem['title'] = 'Anfibio';
                      $lorem['payload'] = 'AMPHIBIA';
                      $ipsum = array();
                      $ipsum['content_type'] = 'text';
                      $ipsum['title'] = 'Ave';
                      $ipsum['payload'] = 'AVES';
                      $dolores = array();
                      $dolores['content_type'] = 'text';
                      $dolores['title'] = 'Mamifero';
                      $dolores['payload'] = 'MAMMALIA';
                      $doloresa = array();
                      $doloresa['content_type'] = 'text';
                      $doloresa['title'] = 'Reptil';
                      $doloresa['payload'] = 'REPTILIA';
                      $dataResponse['facebook']['text'] = 'A que grupo pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      $dataResponse['facebook']['quick_replies'][] = $lorem;
                      $dataResponse['facebook']['quick_replies'][] = $ipsum;
                      $dataResponse['facebook']['quick_replies'][] = $dolores;                      
                      $dataResponse['facebook']['quick_replies'][] = $doloresa;
                      break;
                  default:
                      $respond = $data["result"]["fulfillment"]["speech"];
              }
            }
              if($data["result"]["actionIncomplete"] != 1)
              {
                 //$parametros = $data["result"]["parameters"];
                 $parametros = $data["result"]["contexts"][4]["parameters"];
                 User::create([
                     'name' => $parametros['name'],
                     'email' => $parametros['email'],
                     'password' => bcrypt($parametros['password']),
                     'lastname' => $parametros['lastname'],
                     'dni' => $parametros['dni'],
                     'name_apoderado' => $parametros['name_apoderado'],
                     'lastname_apoderado' => $parametros['lastname_apoderado'],
                     'dni_apoderado' => $parametros['dni_apoderado'],
                     'discapacidad' => strtolower($parametros['discapacidad'])
                 ]);
                 $respond = 'Listo! Su inscripcion se realizo con exito, recuerde que el circuito comienza el 15 de enero. Puede ingresar a http://52.168.151.74 para ver el nuevo perfil de deportista. Usuario: '.$parametros['email'].' Clave: '.$parametros['password'].'. Gracias';
              }
            /*$denuncia = Denuncia::create($atributos);
            if ($denuncia) {
                $tokens = User::where('type_document', 2)->pluck('device')->toArray();
                if ($tokens) {
                    $title = 'Robo vehiculo';
                    $msg = $request->placa;
                    $this->pushService->send($tokens, $title, $msg);
                }
            }*/
            $datos = array();
            $datos['speech'] = $respond;
            $datos['source'] = 'caleidos';
            $datos['data'] = $dataResponse;
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json($datos);
    }
}
