<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Carbon\Carbon;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::all();
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        return view('pagos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'monto' => 'required|numeric',
            'pedido_id' => 'required|exists:pedidos,id',
            'fecha_pago' => 'required|date',
            'metodo_pago' => 'required|string|max:255',
        ]);

       
        Pago::create($validatedData);

        return redirect()->route('pagos.index')->with('success', 'Pago creado exitosamente.');
    }

    public function show(Pago $pago)
    {
        return view('pagos.show', compact('pago'));
    }

    public function edit(Pago $pago)
    {
        return view('pagos.edit', compact('pago'));
    }

    public function update(Request $request, Pago $pago)
    {
        $validatedData = $request->validate([
            'monto' => 'sometimes|required|numeric',
            'fecha_pago' => 'required|date',
            'pedido_id' => 'sometimes|required|exists:pedidos,id',
            'metodo_pago' => 'required|string|max:255',
        ]);

        // Convertir la fecha al formato Y-m-d si se proporciona
       

        $pago->update($validatedData);

        return redirect()->route('pagos.index')->with('success', 'Pago actualizado exitosamente.');
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();

        return redirect()->route('pagos.index')->with('success', 'Pago eliminado con éxito');
    }
}
