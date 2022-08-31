<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Inhumaciones as Consulta;
use App\Models\Inhumaciones;

class DataTramitesController extends Controller
{

    public function dataInhumacion($tipo, $documento, Request $request)
    { 
       
        
        $validateQuestionM = request()->fullUrlWithoutQuery([]);              
              

        if (!$this->validatesQuestion($validateQuestionM)) {
            return response([
                'message' => 'BAD REQUEST',
                'error' => 'Documento Invalido'
            ], 400);
        }
        if (!$this->validateDocument($documento)) {
            return response([
                'message' => 'BAD REQUEST',
                'error' => 'Documento Invalido'
            ], 400);
        }
        if (!$this->validateTipo($tipo)) {
            return response([
                'message' => 'BAD REQUEST',
                'error' => 'Tipo Invalido'
            ], 400);
        }

        $inhumaciones = Inhumaciones::where('identificacion_solicitante', $documento)->get();
        if ($inhumaciones->count() > 0) {
            return response(['tramiteUsuarioEntidad' => [Consulta::collection($inhumaciones)]]);
        } else {
            return response([
                'tramiteUsuarioEntidad' => [[
                    "idTramiteEntidad" => "",
                    "nomTramiteGenerado" => "",
                    "fechaRealizaTramiteUsuario" => "",
                    "servicioConsulta" => "",
                    "estadoTramiteUsuario" => "",
                    "entidadConsultada" => [
                        [
                            "nomEntidad" => '',
                            "fechaConsulta" => ''
                        ]
                    ],
                ]]
            ], 200);
        }
    }
    public function validateDocument($documento)
    {
        if (is_numeric($documento)) {

            return true;
        } else {

            return false;
        }
    }

    public function validateTipo($tipo)
    {
        if (preg_match('#\b(CC|NI|TI|CE|PA)\b#', $tipo)) {
            return true;
        } else {
            return false;
        }
    }
    public function validatesQuestion($market){
        if (strpos($market, '?') !== false) {
            return false;
        }else{
            return true;
        }
    }
}
