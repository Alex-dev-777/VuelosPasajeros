<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasajero;

class PasajeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasajeros = Pasajero::all();
        return view('pasajeros.index', compact('pasajeros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasajeros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required|max:255',
        'apellido' => 'required|max:255',
        'email' => 'required',
        'telefono' => 'required',
    ]);

    Pasajero::create($request->all());
    return redirect()->route('pasajeros.index')->with('success', 'Pasajero registrado exitosamente.');
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasajero = Pasajero::findOrFail($id);
        return view('pasajeros.edit', compact('pasajero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasajero = Pasajero::findOrFail($id);

        $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required',
            'telefono' => 'required',
        ]);

        $pasajero->update($request->all());
        return redirect()->route('pasajeros.index')->with('success', 'Pasajero actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
