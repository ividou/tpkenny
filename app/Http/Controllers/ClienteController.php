<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        $cliente = new Cliente();
        return view('clientes.create', compact('cliente'));

    }

    public function store(Request $request)
{
    $validatedData = $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:clientes',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
    ]);

    $validatedData['fecha_registro'] = now(); // Agregar la fecha de registro

    Cliente::create($validatedData);

    return redirect()->route('clientes.index')->with('success', 'Cliente creado exitosamente.');
}

    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, Cliente $cliente)
    {
        $ValidatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('clientes')->ignore($cliente->id)],
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
        ]);

        $cliente->nombre = $request->nombre;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;

        $cliente->save();

        return redirect()->route('clientes.index')->with('success', 'Cliente actualizado exitosamente.');
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente eliminado exitosamente.');
    }
}