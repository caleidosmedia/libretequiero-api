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
              if($data["result"]["actionIncomplete"] != 1)
              {
                 $clase = $data["result"]["parameters"]["clase"][0];
                 $grupo = $data["result"]["parameters"]["grupo"][0];
                 $color = $data["result"]["parameters"]["color"][0];
                 $animals = Animal::where('class',$clase)
                 ->where('grupo',$grupo)
                 ->where('color',$color)
                 ->get();
                 $respond = 'Ningun animal encontrado';
                 if(!$animals->isEmpty())
                  {
                    $dataResponse['facebook'] = array();
                    $dataResponse['facebook']['attachment'] = array();
                    $dataResponse['facebook']['attachment']['type'] = 'template';
                    $dataResponse['facebook']['attachment']['payload'] = array();
                    $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                    $dataResponse['facebook']['attachment']['payload']['elements'] = array();
                    foreach ($animals as $value) {
                      $opcion = array();
                      $opcion['title'] = $value->common_name;
                      $opcion['image_url'] = $value->image_url;
                      $opcion['buttons'] = array();
                      $boton = array();
                      $boton['type'] = 'web_url';
                      $boton['title'] = 'Saber mas';
                      $boton['url'] = 'https://es.wikipedia.org/wiki/'.$value->scientific_name;
                      $opcion['buttons'][] = $boton;
                      $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                    }
                 }
              } else {
              switch ($data["result"]["fulfillment"]["speech"]) {
                  case "Que clase":
                      $respond = "clase";
                      $dataResponse['facebook'] = array();
                      /*$dataResponse['facebook']['text'] = 'A que clase pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Clase::all() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }*/
                      $dataResponse['facebook']['attachment'] = array();
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = array();
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = array();
                      foreach (Clase::all() as $value) {
                        $opcion = array();
                        $opcion['title'] = $value->clave;
                        $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->clave.'.png';
                        $opcion['buttons'] = array();
                        $boton = array();
                        $boton['type'] = 'postback';
                        $boton['title'] = 'Seleccionar';
                        $boton['payload'] = $value->valor;
                        $opcion['buttons'][] = $boton;
                        $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                      }
                      break;
                  case "Que grupo":
                      $respond = "grupo";
                      $dataResponse['facebook'] = array();
                      $clase = $data["result"]["parameters"]["clase"][0];
                      /*$dataResponse['facebook']['text'] = 'A que grupo pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Grupo::where('clase',$clase)->get() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }*/
                      $dataResponse['facebook']['attachment'] = array();
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = array();
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = array();
                      foreach (Grupo::where('clase',$clase)->get() as $value) {
                        $opcion = array();
                        $opcion['title'] = $value->clave;
                        $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->valor.'.png';
                        $opcion['buttons'] = array();
                        $boton = array();
                        $boton['type'] = 'postback';
                        $boton['title'] = 'Seleccionar';
                        $boton['payload'] = $value->valor;
                        $opcion['buttons'][] = $boton;
                        $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
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
            }
            if($data["result"]["metadata"]["intentName"] == "denuncia"){
              if($data["result"]["actionIncomplete"] != 1)
              {
                 $clase = $data["result"]["parameters"]["clase"][0];
                 $grupo = $data["result"]["parameters"]["grupo"][0];
                 $color = $data["result"]["parameters"]["color"][0];
                 $animals = Animal::where('class',$clase)
                 ->where('grupo',$grupo)
                 ->where('color',$color)
                 ->get();
                 $respond = 'Ningun animal encontrado';
                 if(!$animals->isEmpty())
                  {
                    $dataResponse['facebook'] = array();
                    $dataResponse['facebook']['attachment'] = array();
                    $dataResponse['facebook']['attachment']['type'] = 'template';
                    $dataResponse['facebook']['attachment']['payload'] = array();
                    $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                    $dataResponse['facebook']['attachment']['payload']['elements'] = array();
                    foreach ($animals as $value) {
                      $opcion = array();
                      $opcion['title'] = $value->common_name;
                      $opcion['image_url'] = $value->image_url;
                      $opcion['buttons'] = array();
                      $boton = array();
                      $boton['type'] = 'web_url';
                      $boton['title'] = 'Saber mas';
                      $boton['url'] = 'https://es.wikipedia.org/wiki/'.$value->scientific_name;
                      $opcion['buttons'][] = $boton;
                      $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                    }
                 }
              } else {
              switch ($data["result"]["fulfillment"]["speech"]) {
                  case "Que tipo":
                      $respond = "tipo";
                      $dataResponse['facebook'] = array();
                      $dataResponse['facebook']['text'] = 'Tipo de lugar?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      $opcion = array();
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Establecimiento Comercial';
                      $opcion['payload'] = 'Establecimiento Comercial';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = array();
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Casa';
                      $opcion['payload'] = 'Casa';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = array();
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Otro';
                      $opcion['payload'] = 'Otro';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      break;
                  case "Que grupo":
                      $respond = "grupo";
                      $dataResponse['facebook'] = array();
                      $clase = $data["result"]["parameters"]["clase"][0];
                      $dataResponse['facebook']['attachment'] = array();
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = array();
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = array();
                      foreach (Grupo::where('clase',$clase)->get() as $value) {
                        $opcion = array();
                        $opcion['title'] = $value->clave;
                        $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->valor.'.png';
                        $opcion['buttons'] = array();
                        $boton = array();
                        $boton['type'] = 'postback';
                        $boton['title'] = 'Seleccionar';
                        $boton['payload'] = $value->valor;
                        $opcion['buttons'][] = $boton;
                        $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
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
            $resu = json_encode($datos);
            Log::info($resu);
        } catch (\Exception $e) {
            Log::info($e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
        return $resu;
    }
}