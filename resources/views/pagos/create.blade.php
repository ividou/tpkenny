@extends('plantilla')

@section('titulo', 'Registrar Nuevo Pago')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Registrar Nuevo Pago</h2>
    <form action="{{ route('pagos.store') }}" method="POST">
        @csrf
        
        @include('pagos._form')
        
    </form>
@endsection
