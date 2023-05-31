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

        $datos = parent::toArray($request);
        $productos = collect($datos["detalles_venta"])->map(function ($detalleVenta) {
            return [
                'venta' => [
                    'fecha' => $detalleVenta['ventas']['fecha'],
                    'nombre_cliente' => $detalleVenta['ventas']['clientes']['nombre'],
                    'email_cliente' => $detalleVenta['ventas']['clientes']['email'],
                    'telefono_cliente' => $detalleVenta['ventas']['clientes']['telefono']

                ],
                'producto' => [
                    'nombre_producto' => $detalleVenta['productos']['nombre'],
                    'precio' => $detalleVenta['productos']['precio']
                    
                ],
                'cantidad' => $detalleVenta["cantidad"],
                'total' => $detalleVenta["cantidad"] * $detalleVenta['productos']['precio']


            ];
        });
        
        return $productos;
        
    }


}
