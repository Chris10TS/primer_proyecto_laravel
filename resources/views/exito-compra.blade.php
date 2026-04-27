@extends('layouts.app')

@section('titulo', 'Compra Exitosa')

@section('contenido')
<div class="container my-5 text-center">
    <div class="bg-white p-5 rounded shadow-sm mx-auto" style="max-width: 550px;">
        <i class="ti ti-circle-check text-success display-1 mb-4"></i>
        <h1 class="fw-bold">¡Gracias por tu compra, {{ $nombre }}!</h1>
        <p class="text-muted fs-5">Tu pedido #{{ rand(10000, 99999) }} ha sido registrado con éxito.</p>
        <p class="small text-muted mb-4">En breve recibirás un correo con el detalle de la entrega.</p>
        <hr class="my-4">
        <a href="/inicio" class="btn btn-primary btn-lg px-5 fw-bold">Volver al Inicio</a>
    </div>
</div>
@endsection