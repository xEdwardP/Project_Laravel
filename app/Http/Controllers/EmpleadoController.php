<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id_empleado)
    {
        $empleado = Empleado::findOrFail($id_empleado);
        return view('empleados.show', compact('empleado'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id_empleado)
    {
        $empleado = Empleado::findOrFail($id_empleado);
        return view('empleados.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id_empleado)
    {
        $empleado = Empleado::findOrFail($id_empleado);
        $empleado->rtn = $request->rtn;
        $empleado->nombre = $request->nombrec;
        $empleado->direccion = $request->direccion;
        $empleado->telefono = $request->telefono;
        $empleado->genero = $request->genero;
        $empleado->correo = $request->correo;
        $empleado->estado = $request->estado;

        $empleado->save();
        return redirect()->route('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_empleado)
    {
        $empleado = Empleado::findOrFail($id_empleado);
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
