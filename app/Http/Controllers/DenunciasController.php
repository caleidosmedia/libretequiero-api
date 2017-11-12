<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Denuncia;
use Illuminate\Support\Facades\Log;
use App\Clase;
use App\Grupo;
use App\Color;
use App\Animal;

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
                  case "Que clase":
                      $respond = "clase";
                      $dataResponse['facebook'] = array();
                      $dataResponse['facebook']['text'] = 'A que clase pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Clase::all() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }
                      break;
                  case "Que grupo":
                      $respond = "grupo";
                      $dataResponse['facebook'] = array();
                      $dataResponse['facebook']['text'] = 'A que grupo pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      $clase = $data["result"]["parameters"]["clase"][0];
                      foreach (Grupo::where('clase',$clase)->get() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }
                      break;
                  case "Que color":
                      $respond = "clase";
                      $dataResponse['facebook'] = array();
                      $dataResponse['facebook']['text'] = 'De que color es?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Color::all() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }
                      break;
                  default:
                      $respond = $data["result"]["fulfillment"]["speech"];
              }
            }
              if($data["result"]["actionIncomplete"] != 1)
              {
                 $clase = $data["result"]["parameters"]["clase"][0];
                 $grupo = $data["result"]["parameters"]["grupo"][0];
                 $color = $data["result"]["parameters"]["color"][0];
                 $animals = Animal::where('class',$clase)
                 ->where('grupo',$grupo)
                 ->where('color',$color)
                 ->get();
                 $respuesta = '';
                 foreach ($animals as $value) {
                    $respuesta.=$value->common_name;
                 }
                 if(empty($respuesta))
                    $respuesta = 'Ninguno';
                 $respond = 'Animales encontrados: '.$respuesta;
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
            Log::info($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return response()->json($datos);
    }
}
