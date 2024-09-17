@extends('plantilla')

@section('titulo', 'Editar Cliente')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Cliente</h2>
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PATCH')

        @include('clientes._form')
        
    </form>
@endsection 


