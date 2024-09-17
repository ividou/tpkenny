@extends('plantilla')

@section('titulo', 'Listado de Pagos')

@section('contenido')
    <a href="{{ route('pagos.create') }}" class="btn btn-success mb-2">Crear Pago</a>

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
                <th>Pedido ID</th>
                <th>Monto</th>
                <th>Método de Pago</th>
                <th>Fecha de pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $pago)
            <tr>
                <td>{{ $pago->id }}</td>
                <td>{{ $pago->pedido_id }}</td>
                <td>{{ $pago->monto }}</td>
                <td>{{ $pago->metodo_pago }}</td>
                <td>{{ $pago->fecha_pago }}</td>
                <td>
                    <a href="{{ route('pagos.edit', $pago->id) }}" class="btn btn-primary">Editar</a>
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST" style="display: inline;">
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
