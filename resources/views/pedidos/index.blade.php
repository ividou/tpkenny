@extends('plantilla')

@section('titulo', 'Listado de Pedidos')

@section('contenido')
    <a href="{{ route('pedidos.create') }}" class="btn btn-success mb-2">Crear Pedido</a>

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
                <th>Cliente</th>
                <th>Fecha Pedido</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pedidos as $pedido)
            <tr>
                <td>{{ $pedido->id }}</td>
                <td>{{ $pedido->cliente->nombre }}</td>
                <td>{{ $pedido->fecha_pedido }}</td>
                <td>{{ $pedido->total }}</td>
                <td>{{ $pedido->estado }}</td>
                <td>
                    <a href="{{ route('pedidos.edit', $pedido->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('pedidos.destroy', $pedido->id) }}" method="POST" style="display: inline;">
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
