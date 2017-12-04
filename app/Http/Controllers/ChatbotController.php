<?php

namespace App\Http\Controllers;

use App\Clase;
use App\Color;
use App\Grupo;
use App\Animal;
use App\Denuncia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    public function store(Request $request)
    {
        try {
            $data = $request->all();
            Log::info(print_r($data, true));
            $dataResponse = [];
            if ($data['result']['metadata']['intentName'] == 'conoce') {
                if ($data['result']['actionIncomplete'] != 1) {
                    $clase = $data['result']['parameters']['clase'][0];
                    $grupo = $data['result']['parameters']['grupo'][0];
                    $color = $data['result']['parameters']['color'][0];
                    $animals = Animal::where('class', $clase)
                 ->where('grupo', $grupo)
                 ->where('color', $color)
                 ->get();
                    $respond = 'Ningun animal encontrado';
                    if (! $animals->isEmpty()) {
                        $dataResponse['facebook'] = [];
                        $dataResponse['facebook']['attachment'] = [];
                        $dataResponse['facebook']['attachment']['type'] = 'template';
                        $dataResponse['facebook']['attachment']['payload'] = [];
                        $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                        $dataResponse['facebook']['attachment']['payload']['elements'] = [];
                        foreach ($animals as $value) {
                            $opcion = [];
                            $opcion['title'] = $value->common_name;
                            $opcion['image_url'] = $value->image_url;
                            $opcion['buttons'] = [];
                            $boton = [];
                            $boton['type'] = 'web_url';
                            $boton['title'] = 'Saber mas';
                            $boton['url'] = 'https://es.wikipedia.org/wiki/'.$value->scientific_name;
                            $opcion['buttons'][] = $boton;
                            $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                        }
                    }
                } else {
                    switch ($data['result']['fulfillment']['speech']) {
                  case 'Que clase':
                      $respond = 'clase';
                      $dataResponse['facebook'] = [];
                      /*$dataResponse['facebook']['text'] = 'A que clase pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Clase::all() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }*/
                      $dataResponse['facebook']['attachment'] = [];
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = [];
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = [];
                      foreach (Clase::all() as $value) {
                          $opcion = [];
                          $opcion['title'] = $value->clave;
                          $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->clave.'.png';
                          $opcion['buttons'] = [];
                          $boton = [];
                          $boton['type'] = 'postback';
                          $boton['title'] = 'Seleccionar';
                          $boton['payload'] = $value->valor;
                          $opcion['buttons'][] = $boton;
                          $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                      }
                      break;
                  case 'Que grupo':
                      $respond = 'grupo';
                      $dataResponse['facebook'] = [];
                      $clase = $data['result']['parameters']['clase'][0];
                      /*$dataResponse['facebook']['text'] = 'A que grupo pertenece?';
                      $dataResponse['facebook']['quick_replies'] = array();
                      foreach (Grupo::where('clase',$clase)->get() as $value) {
                        $opcion = array();
                        $opcion['content_type'] = 'text';
                        $opcion['title'] = $value->clave;
                        $opcion['payload'] = $value->valor;
                        $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }*/
                      $dataResponse['facebook']['attachment'] = [];
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = [];
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = [];
                      foreach (Grupo::where('clase', $clase)->get() as $value) {
                          $opcion = [];
                          $opcion['title'] = $value->clave;
                          $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->valor.'.png';
                          $opcion['buttons'] = [];
                          $boton = [];
                          $boton['type'] = 'postback';
                          $boton['title'] = 'Seleccionar';
                          $boton['payload'] = $value->valor;
                          $opcion['buttons'][] = $boton;
                          $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                      }
                      break;
                  case 'Que color':
                      $respond = 'clase';
                      $dataResponse['facebook'] = [];
                      $dataResponse['facebook']['text'] = 'De que color es?';
                      $dataResponse['facebook']['quick_replies'] = [];
                      foreach (Color::all() as $value) {
                          $opcion = [];
                          $opcion['content_type'] = 'text';
                          $opcion['title'] = $value->clave;
                          $opcion['payload'] = $value->valor;
                          $dataResponse['facebook']['quick_replies'][] = $opcion;
                      }
                      break;
                  default:
                      $respond = $data['result']['fulfillment']['speech'];
              }
                }
            }
            if ($data['result']['metadata']['intentName'] == 'denuncia') {
                if ($data['result']['actionIncomplete'] != 1) {
                    $tipo_locacion = $data['result']['parameters']['tipo_locacion'][0];
                    $clase = $data['result']['parameters']['clase'][0];
                    $grupo = $data['result']['parameters']['grupo'][0];
                    $estado = $data['result']['parameters']['estado'][0];
                    $almacenamiento = $data['result']['parameters']['almacenamiento'][0];
                    $descripcion = $data['result']['parameters']['descripcion'][0];
                    $atributos = [
                  'tipo_locacion' => $tipo_locacion,
                  'clase' => $clase,
                  'grupo' => $grupo,
                  'estado' => $estado,
                  'almacenamiento' => $almacenamiento,
                  'descripcion' => $descripcion,
                  'coordenadas' => '-12,-77',
                  'direccion' => 'pucp',
                 ];
                    $denuncia = Denuncia::create($atributos);
                    if ($denuncia) {
                        /*$tokens = User::where('type_document', 2)->pluck('device')->toArray();
                        if ($tokens) {
                            $title = 'Robo vehiculo';
                            $msg = $request->placa;
                            $this->pushService->send($tokens, $title, $msg);
                        }*/
                        $respond = 'Denuncia recibida';
                    }
                } else {
                    switch ($data['result']['fulfillment']['speech']) {
                  case 'Que tipo':
                      $respond = 'tipo';
                      $dataResponse['facebook'] = [];
                      $dataResponse['facebook']['text'] = 'Tipo de lugar?';
                      $dataResponse['facebook']['quick_replies'] = [];
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Establecimiento Comercial';
                      $opcion['payload'] = 'Establecimiento Comercial';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Casa';
                      $opcion['payload'] = 'Casa';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Otro';
                      $opcion['payload'] = 'Otro';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      break;
                  case 'Que clase':
                      $respond = 'clase';
                      $dataResponse['facebook'] = [];
                      //$dataResponse['facebook']['text'] = 'Que clase de animal es?';
                      $dataResponse['facebook']['attachment'] = [];
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = [];
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = [];
                      foreach (Clase::all() as $value) {
                          $opcion = [];
                          $opcion['title'] = $value->clave;
                          $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->clave.'.png';
                          $opcion['buttons'] = [];
                          $boton = [];
                          $boton['type'] = 'postback';
                          $boton['title'] = 'Seleccionar';
                          $boton['payload'] = $value->valor;
                          $opcion['buttons'][] = $boton;
                          $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                      }
                      break;
                  case 'Que grupo':
                      $respond = 'grupo';
                      $dataResponse['facebook'] = [];
                      $clase = $data['result']['parameters']['clase'][0];
                      $dataResponse['facebook']['attachment'] = [];
                      $dataResponse['facebook']['attachment']['type'] = 'template';
                      $dataResponse['facebook']['attachment']['payload'] = [];
                      $dataResponse['facebook']['attachment']['payload']['template_type'] = 'generic';
                      $dataResponse['facebook']['attachment']['payload']['elements'] = [];
                      foreach (Grupo::where('clase', $clase)->get() as $value) {
                          $opcion = [];
                          $opcion['title'] = $value->clave;
                          $opcion['image_url'] = 'http://clientes.caleidosmedia.com/dejaloslibres-api/public/img/'.$value->valor.'.png';
                          $opcion['buttons'] = [];
                          $boton = [];
                          $boton['type'] = 'postback';
                          $boton['title'] = 'Seleccionar';
                          $boton['payload'] = $value->clave;
                          $opcion['buttons'][] = $boton;
                          $dataResponse['facebook']['attachment']['payload']['elements'][] = $opcion;
                      }
                      break;
                  case 'Que estado':
                      $respond = 'estado';
                      $dataResponse['facebook'] = [];
                      $dataResponse['facebook']['text'] = 'Estado del animal?';
                      $dataResponse['facebook']['quick_replies'] = [];
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Vivo';
                      $opcion['payload'] = 'Vivo';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Vivo - Mal Herido';
                      $opcion['payload'] = 'Vivo - Mal Herido';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Vivo - Enfermo';
                      $opcion['payload'] = 'Vivo - Enfermo';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Muerto';
                      $opcion['payload'] = 'Muerto';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Muerto - En forma de producto';
                      $opcion['payload'] = 'Muerto - En forma de producto';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      break;
                  case 'Que almacenamiento':
                      $respond = 'almacenamiento';
                      $dataResponse['facebook'] = [];
                      $dataResponse['facebook']['text'] = 'En donde esta?';
                      $dataResponse['facebook']['quick_replies'] = [];
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Jaula';
                      $opcion['payload'] = 'Jaula';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Cajas';
                      $opcion['payload'] = 'Cajas';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Bolsas';
                      $opcion['payload'] = 'Bolsas';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      $opcion = [];
                      $opcion['content_type'] = 'text';
                      $opcion['title'] = 'Otro';
                      $opcion['payload'] = 'Otro';
                      $dataResponse['facebook']['quick_replies'][] = $opcion;
                      break;
                  default:
                      $respond = $data['result']['fulfillment']['speech'];
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
            $datos = [];
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
