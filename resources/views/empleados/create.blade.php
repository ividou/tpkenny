@extends('plantilla')

@section('titulo', 'Crear Nuevo Empleado')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Crear Nuevo Empleado</h2>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        @include('empleados._form')
    </form>
@endsection
