@extends('plantilla')

@section('titulo', 'Bienvenida')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
<div class="container">
    <h1 id="titulo">Bienvenido a la empresa de tecnología</h1>
    <div class="content">
        <p>Pagina creada por Ivan Samek.</p>
    </div>
</div>

@endsection

