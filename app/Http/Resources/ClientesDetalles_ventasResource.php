<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientesDetalles_ventasResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
 public function toArray($request)
    {
/*         return [
            'producto' => [
                'nombre' => $this->detalles_venta->productos->nombre,
                'precio' => $this->detalles_venta->productos->precio
            ],
            'cliente' => [
                'nombre' => $this->detalles_venta->ventas->clientes->nombre,
                'email' => $this->detalles_venta->ventas->clientes->email,
                'telefono' => $this->detalles_venta->ventas->clientes->telefono
            ],
            'cantidad' => $this->detalles_venta->cantidad,
            'total' => $this->detalles_venta->cantidad * $this->detalles_venta[0]->productos->precio

        ]; */

        return parent::toArray($request);
    }


}
