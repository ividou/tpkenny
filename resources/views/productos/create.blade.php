@extends('plantilla')

@section('titulo', 'Crear Nuevo Producto')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Crear Nuevo Producto</h2>
    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        
        @include('productos._form')
        
        
    </form>
@endsection
