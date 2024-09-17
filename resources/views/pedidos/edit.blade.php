@extends('plantilla')

@section('titulo', 'Editar Pedido')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Pedido</h2>
    <form action="{{ route('pedidos.update', $pedido->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('pedidos._form', ['pedido' => $pedido])
    </form>
@endsection
