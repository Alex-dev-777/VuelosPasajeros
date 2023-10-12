<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;


class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vuelos = Vuelo::all();
    return view('vuelos.index', compact('vuelos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vuelos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validación de datos
    $request->validate([
        'codigo' => 'required|unique:vuelos,codigo|max:255',
        'origen' => 'required|max:255',
        'destino' => 'required|max:255',
        'fecha_hora' => 'required|date',
        'precio' => 'required|numeric|min:0',
    ]);

    // Crear un nuevo vuelo y guardar en la base de datos
    Vuelo::create([
        'codigo' => $request->codigo,
        'origen' => $request->origen,
        'destino' => $request->destino,
        'fecha_hora' => $request->fecha_hora,
        'precio' => $request->precio,
    ]);

    // Redirigir a la lista de vuelos con un mensaje de éxito
    return redirect()->route('vuelos.index')->with('success', 'Vuelo ingresado exitosamente.');
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
        $vuelo = Vuelo::findOrFail($id);
    return view('vuelos.edit', compact('vuelo'));
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
    $vuelo = Vuelo::findOrFail($id);

    $request->validate([
        'codigo' => 'required|max:255|unique:vuelos,codigo,' . $vuelo->id,
        'origen' => 'required|max:255',
        'destino' => 'required|max:255',
        'fecha_hora' => 'required|date',
        'precio' => 'required|numeric|min:0',
    ]);

    $vuelo->update($request->all());
    return redirect()->route('vuelos.index')->with('success', 'Vuelo actualizado exitosamente.');
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
