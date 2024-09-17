@extends('plantilla')

@section('titulo', 'Listado de Empleados')

@section('contenido')
    <a href="{{ route('empleados.create') }}" class="btn btn-success mb-2">Crear Empleado</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <link rel="stylesheet" href="{{ asset('css/facha.css') }}">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Puesto</th>
                <th>Salario</th>
                <th>Fecha contratacion</th>
                <th>Acciones</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->id }}</td>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->apellido }}</td>
                <td>{{ $empleado->email }}</td>
                <td>{{ $empleado->telefono }}</td>
                <td>{{ $empleado->puesto }}</td>
                <td>{{ $empleado->salario }}</td>
                <td>{{ $empleado->fecha_contratacion }}</td>
                <td>
                    <a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Borrar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
