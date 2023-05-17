<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Cliente/Index',
            [
                'clientes'=>Cliente::all()
            ]
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Cliente/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cliente::create(
            $request->validate([
                'nombre'=>'required',
                'apellido_paterno'=>'required',
                'apellido_materno'=>'required',
                'dni'=>'required',
                'direccion'=>'required',
                'numero_celular'=>'required'
            ])
        );

        return redirect()->route('cliente.index')->with('success','The store was a success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        return inertia(
            'Cliente/Show',
            [
                'cliente'=>$cliente
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        return inertia(
            'Cliente/Edit',
            [
                'cliente'=>$cliente
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update(
            $request->validate([
                'nombre'=>'required',
                'apellido_paterno'=>'required',
                'apellido_materno'=>'required',
                'dni'=>'required',
                'direccion'=>'required',
                'numero_celular'=>'required'
            ])
        );

        return redirect()->route('cliente.index')->with('success','The edit was a success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        $cliente -> delete();

        return redirect()->back()->with('success', 'The client was deleted!');
    }
}
