<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => 'required|email|unique:empleados,email',
            'telefono' => 'required|string|max:20',
            'puesto' => 'required|string|max:255',
            'salario' => 'required|numeric',
            'fecha_contratacion' => 'required|date',
        ]);

        Empleado::create($validatedData);

        return redirect()->route('empleados.index')->with('success', 'Empleado creado exitosamente.');
    }

    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function edit(Empleado $empleado)
    {
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'email' => ['required', 'email', 'max:255', Rule::unique('empleados')->ignore($empleado->id)],
            'telefono' => 'required|string|max:20',
            'puesto' => 'required|string|max:255',
            'salario' => 'required|numeric',
            'fecha_contratacion' => 'required|date',
        ]);

        $empleado->update($validatedData);

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado exitosamente.');
    }

    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')->with('success', 'Empleado eliminado con éxito');
    }
}
