@extends('plantilla')

@section('titulo', 'Editar Producto')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Producto</h2>
    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf
        @method('PATCH')

        @include('productos._form')
        
        
    </form>
@endsection
