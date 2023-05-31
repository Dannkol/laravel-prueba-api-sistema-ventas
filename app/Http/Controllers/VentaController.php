<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreventaRequest;
use App\Http\Requests\UpdateventaRequest;
use App\Models\venta;

class VentaController extends Controller
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
     * @param  \App\Http\Requests\StoreventaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreventaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function show(venta $venta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateventaRequest  $request
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateventaRequest $request, venta $venta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\venta  $venta
     * @return \Illuminate\Http\Response
     */
    public function destroy(venta $venta)
    {
        //
    }
}
