@extends('plantilla')

@section('titulo', 'Listado de Productos')

@section('contenido')
    <a href="{{ route('productos.create') }}" class="btn btn-success mb-2">Crear Producto</a>

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
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Proveedor</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->precio }}</td>
                <td>{{ $producto->stock }}</td>
                <td>{{ $producto->categoria }}</td>
                <td>{{ $producto->proveedor->nombre }}</td>
                <td>
                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display: inline;">
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
