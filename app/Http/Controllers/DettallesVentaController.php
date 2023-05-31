<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storedettalles_ventaRequest;
use App\Http\Requests\Updatedettalles_ventaRequest;
use App\Models\dettalles_venta;

class DettallesVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storedettalles_ventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storedettalles_ventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dettalles_venta  $dettalles_venta
     * @return \Illuminate\Http\Response
     */
    public function show(dettalles_venta $dettalles_venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatedettalles_ventaRequest  $request
     * @param  \App\Models\dettalles_venta  $dettalles_venta
     * @return \Illuminate\Http\Response
     */
    public function update(Updatedettalles_ventaRequest $request, dettalles_venta $dettalles_venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dettalles_venta  $dettalles_venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(dettalles_venta $dettalles_venta)
    {
        //
    }
}
