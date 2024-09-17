<?php

namespace App\Http\Controllers\Api;

use App\Models\Cliente;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ApiClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();

        return response()->json($clientes, 201);

        //return Cliente::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:15',
            'email' => 'required|email|unique:clientes,email',
            'tipo_cliente' => 'required|string|max:50',
        ]);

        $cliente = Cliente::create($validatedData);

        return response()->json($cliente, 201);
    }

    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return response()->json($cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        $validatedData = $request->validate([
            'nombre' => 'string|max:255',
            'apellido' => 'string|max:255',
            'direccion' => 'string|max:255',
            'telefono' => 'string|max:15',
            'email' => 'email|unique:clientes,email,'.$cliente->id,
            'tipo_cliente' => 'string|max:50',
        ]);

        $cliente->update($validatedData);

        return response()->json($cliente);
    }

    public function destroy($id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();

        return response()->json(null, 204);
    }
}
