@extends('plantilla')

@section('titulo', 'Editar Pago')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/editcreate.css') }}">
    <h2>Editar Pago</h2>
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('PATCH')
        @include('pagos._form', ['pago' => $pago])
    </form>
@endsection
