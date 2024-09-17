<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::all();
            return view('pedidos.index', ['pedidos' => $pedidos]);
    }

    public function create()
    {
        $pedido = new Pedido();
        return view('pedidos.create', compact('pedido'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'fecha_pedido' => 'required|date',
            'estado' => 'required|string|max:255',
            'total' => 'required|numeric',
        ]);

        $pedido = new Pedido();
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->fecha_pedido = $request->input('fecha_pedido');
        $pedido->estado = $request->input('estado');
        $pedido->total = $request->input('total');
        $pedido->save();

        return redirect()->route('pedidos.index', $pedido)->with('success', 'Pedido agregado exitosamente.');
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->save();

    }

    public function show($id)
    {
        $pedido = Pedido::findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }

    public function edit($id)
    {
        $pedido = Pedido::findOrFail($id);
        $clientes = Cliente::all(); // Obtén todos los clientes (o según sea necesario)
    
        return view('pedidos.edit', compact('pedido', 'clientes'));
    }
    
    

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'sometimes|required|exists:clientes,id',
            'fecha_pedido' => 'sometimes|required|date',
            'estado' => 'sometimes|required|string|max:255',
            'total' => 'sometimes|required|numeric',
        ]);

        $pedido = Pedido::findOrFail($id);
        $pedido->cliente_id = $request->input('cliente_id', $pedido->cliente_id);
        $pedido->fecha_pedido = $request->input('fecha_pedido', $pedido->fecha_pedido);
        $pedido->estado = $request->input('estado', $pedido->estado);
        $pedido->total = $request->input('total', $pedido->total);
        $pedido->update();

        return redirect()->route('pedidos.index')->with('success', 'Pedido actualizado exitosamente');

    }
    

    public function destroy(Pedido $pedido)
    {
        $pedido->delete();

        return redirect()->route('pedidos.index')->with('success', 'Pedido eliminado con éxito');
    }
}
