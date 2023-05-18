<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;


class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia('Venta/Form2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Venta::create(
            $request->validate([
                'id_cliente'=>'required',
                'tipo_comprobante'=>'required',
                'numero_comprobante'=>'required',
                'fecha'=>'required',
                'impuesto'=>'required',
                'total'=>'required'
            ])
        );

        return redirect('/')->with('success','The Selling was completed!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
