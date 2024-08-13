<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Muestra el listado de registros
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Mostrar el formulario de registro
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Guardar un nuevo registro
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->nombre_o_razon = $request->nombre;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->genero = $request->genero;
        $cliente->fecha_nac = $request->fecha_nac;
        $cliente->correo = $request->correo;

        $cliente->save();
        return redirect()->route('clientes.index');
    }

    /**
     * Mostrar datos de un registro en especifico
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Muestra el formulario para luego actualizarlo
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Actualizar un registro en especifico
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Eliminar un registro en especifico
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
