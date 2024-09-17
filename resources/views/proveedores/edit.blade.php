@extends('plantilla')

@section('titulo', 'Editar Proveedor')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Proveedor</h2>
    <form action="{{ route('proveedores.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('proveedores._form', ['proveedor' => $proveedor])
    </form>
@endsection
