<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = [
            'periferico' => 'Periférico',
            'placa de video' => 'Placa de Video',
            'CPU' => 'CPU',
            'almacenamiento' => 'Almacenamiento',
            'motherboard' => 'Motherboard',
            'fuente de poder' => 'Fuente de Poder',
            'RAM' => 'RAM',
        ];

        $proveedores = Proveedor::all();
        return view('productos.create', compact('proveedores', 'categorias'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
            'categoria' => 'required|string|max:255',
            'proveedor_id' => 'required|exists:proveedores,id',
        ]);

        Producto::create($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
    }

    public function show($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.index', compact('producto'));
    }

    public function edit($id)
    {
        

        $producto = Producto::findOrFail($id);
        $proveedores = Proveedor::all(); // Asegúrate de obtener todos los proveedores

        return view('productos.edit', compact('producto', 'proveedores'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'descripcion' => 'sometimes|required|string',
            'precio' => 'sometimes|required|numeric',
            'stock' => 'sometimes|required|integer',
            'categoria' => 'sometimes|required|string|max:255',
            'proveedor_id' => 'sometimes|required|exists:proveedores,id',
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($validatedData);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado con éxito');
    }
}
