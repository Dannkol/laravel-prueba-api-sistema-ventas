<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDetalles_ventaRequest;
use App\Http\Requests\UpdateDetalles_ventaRequest;
use App\Http\Resources\Detalles_ventasResource;
use App\Models\Detalles_venta;

class DetallesVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Detalles_ventasResource::collection(Detalles_venta::with('productos','ventas.clientes')->get());


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDetalles_ventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDetalles_ventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detalles_venta  $detalles_venta
     * @return \Illuminate\Http\Response
     */
    public function show(Detalles_venta $detalles_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDetalles_ventaRequest  $request
     * @param  \App\Models\Detalles_venta  $detalles_venta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDetalles_ventaRequest $request, Detalles_venta $detalles_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detalles_venta  $detalles_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detalles_venta $detalles_venta)
    {
        //
    }
}
