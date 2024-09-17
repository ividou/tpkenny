@extends('plantilla')

@section('titulo', 'Crear Nuevo Pedido')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Crear Nuevo Pedido</h2>
    <form action="{{ route('pedidos.store') }}" method="POST">
        @csrf
        @include('pedidos._form')
        
    </form>
@endsection
