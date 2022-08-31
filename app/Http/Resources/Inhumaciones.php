<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class Inhumaciones extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {    
      
            
        return [
            "idTramiteEntidad"=> "Alcaldía de Bucaramanga",
            "nomTramiteGenerado"=>"Consulta Inhumacion",
            "fechaRealizaTramiteUsuario"=> Carbon::parse($this->created_at)->format('Y-m-d H:i:s.00'),
            "servicioConsulta"=>"Consulta Inhumacion",
            "estadoTramiteUsuario"=> "Generado",
            "entidadConsultada" =>[[
                "nomEntidad"=> '',
                "fechaConsulta"=> ''
            ]
            ], 


        ];
     

        
    }
}
