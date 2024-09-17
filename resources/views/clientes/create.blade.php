@extends('plantilla')

@section('titulo', 'Crear Nuevo Cliente')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <div class="container">
        <h2>Crear Nuevo Cliente</h2>
        <form action="{{ route('clientes.store') }}" method="POST">
            @csrf
            @include('clientes._form')
        </form>
    </div>
    
@endsection



