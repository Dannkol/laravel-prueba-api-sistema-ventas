<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Detalles_ventasResource extends JsonResource
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
            "producto" => ['nombre' => $this->productos->nombre,
                            'precio' => $this->productos->precio
                            ],
            "venta" => ['nombre_cliente' => $this->ventas->clientes->nombre,
                        'email' => $this->ventas->clientes->email,
                        'telefono' => $this->ventas->clientes->telefono
                        ],
            "cantidad" => $this->cantidad,
            "total" => $this->cantidad*$this->productos->precio
        ];
    }
}
