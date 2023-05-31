<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreclienteRequest;
use App\Http\Requests\UpdateclienteRequest;
use App\Models\Cliente;

use App\Http\Resources\ClientesDetalles_ventasResource;

class ClienteController extends Controller
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

    public function detallesVentas($id)
    {
        $cliente = Cliente::findOrFail($id);
        $detallesVentas = $cliente->ventas()->with('detallesVenta.ventas.clientes', 'detallesVenta.productos')->get();


        return ClientesDetalles_ventasResource::collection($detallesVentas);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreclienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreclienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateclienteRequest  $request
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateclienteRequest $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
