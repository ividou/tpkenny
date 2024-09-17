@extends('plantilla')

@section('titulo', 'Agregar Nuevo Proveedor')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Agregar Nuevo Proveedor</h2>
    <form action="{{ route('proveedores.store') }}" method="POST">
        @csrf
        
        @include('proveedores._form')
        
    </form>
@endsection
