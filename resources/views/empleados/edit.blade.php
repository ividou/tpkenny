@extends('plantilla')

@section('titulo', 'Editar Empleado')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Empleado</h2>
    <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('empleados._form', ['empleado' => $empleado])
    </form>
@endsection
