<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExposicaoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {


        return [
          'id' => $this->id,
          'nome_da_sala' => $this->nome_da_sala,
          'responsavel' => $this->responsavel
        ];

        
    }
}
