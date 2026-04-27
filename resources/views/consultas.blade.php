@extends('layouts.app')

@section('titulo', 'Consultas')

@section('contenido')

<div class="container my-5">
    {{-- Título de la página --}}
    <div class="row mb-4 text-center text-md-start">
        <div class="col-12">
            <h1 class="fw-bold">Realizá tu Consulta</h1>
            <p class="text-muted">Completá el formulario y un asesor de Tienda OGA se pondrá en contacto con vos a la brevedad.</p>
            <hr>
        </div>
    </div>

    {{-- Bloque Blanco Principal --}}
    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
        <div class="row align-items-center">
            
            {{-- Columna Izquierda: Formulario --}}
            <div class="col-md-6 pe-md-5 border-end-md">
                <form action="{{ url('/contacto-oga') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold small">Nombre Completo</label>
                        <input type="text" name="nombre" class="form-control bg-light" placeholder="Ej: Juan Pérez" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Correo Electrónico</label>
                        <input type="email" name="email" class="form-control bg-light" placeholder="nombre@ejemplo.com" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">Teléfono / WhatsApp</label>
                        <input type="text" name="telefono" class="form-control bg-light" placeholder="Ej: 3794123456" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold small">¿En qué podemos ayudarte?</label>
                        <textarea name="mensaje" class="form-control bg-light" rows="5" placeholder="Escribí tu consulta aquí..." required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 py-2 fw-bold shadow-sm">
                        <i class="ti ti-send me-2"></i>Enviar Consulta
                    </button>
                </form>
            </div>

            {{-- Columna Derecha: Imagen --}}
            <div class="col-md-6 mt-4 mt-md-0 text-center">
                <img src="{{ asset('images/tu-imagen-aqui.png') }}" 
                     class="img-fluid rounded shadow-sm" 
                     alt="Consulta en Tienda OGA"
                     style="max-height: 450px; width: 100%; object-fit: cover;">
                
                {{-- Opcional: Un pequeño texto debajo de la imagen --}}
                <div class="mt-3">
                    <p class="small text-muted italic">"Tu confianza es nuestra prioridad."</p>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection