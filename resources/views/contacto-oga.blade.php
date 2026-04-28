@extends('layouts.app')

@section('titulo', 'Contacto')

@section('contenido')

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold fs-2 text-dark">Canales de Contacto</h1>
            <p class="text-muted">Elegí el medio que prefieras para comunicarte con nosotros.</p>
            <hr>
        </div>
    </div>

    <div class="bg-white p-4 p-md-5 rounded shadow-sm mb-5">
        <div class="row g-4">
            
            {{-- WhatsApp --}}
            <div class="col-md-6 col-lg-3 text-center">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="ti ti-brand-whatsapp text-success display-4"></i>
                        </div>
                        <h5 class="fw-bold">WhatsApp</h5>
                        <p class="small text-muted">Atención inmediata</p>
                        <p class="fw-semibold mb-3">3794-055431</p>
                        <a href="https://wa.me/543794055431" target="_blank" class="btn btn-outline-success btn-sm w-100">Chatear ahora</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="ti ti-brand-instagram text-danger display-4" style="color: #E1306C !important;"></i>
                        </div>
                        <h5 class="fw-bold">Instagram</h5>
                        <p class="small text-muted">Seguinos y consultanos</p>
                        <p class="fw-semibold mb-3">@tiendaogaarg</p>
                        <a href="https://www.instagram.com/tiendaogaarg" target="_blank" class="btn btn-outline-danger btn-sm w-100">Ver Perfil</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="ti ti-brand-facebook text-primary display-4"></i>
                        </div>
                        <h5 class="fw-bold">Facebook</h5>
                        <p class="small text-muted">Marketplace y más</p>
                        <p class="fw-semibold mb-3">Tienda OGA</p>
                        <a href="https://www.facebook.com/marketplace/profile/61565914446195" target="_blank" class="btn btn-outline-primary btn-sm w-100">Ir a Facebook</a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3 text-center">
                <div class="card h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="ti ti-mail text-dark display-4"></i>
                        </div>
                        <h5 class="fw-bold">Email</h5>
                        <p class="small text-muted">Consultas formales</p>
                        <p class="fw-semibold mb-3">tiendaOGA@gmail.com</p>
                        <a href="mailto:tiendaOGA@gmail.com" class="btn btn-outline-dark btn-sm w-100">Enviar Correo</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-white p-4 rounded shadow-sm">
        <div class="row align-items-center">
            <div class="col-md-6 border-end-md text-center text-md-start">
                <h6 class="fw-bold"><i class="ti ti-clock text-primary"></i> Horario de Atención</h6>
                <p class="text-muted mb-0">Estamos disponibles <strong>las 24 horas del día, los 7 días de la semana</strong> para recibir tus pedidos y mensajes.</p>
            </div>
            <div class="col-md-6 text-center text-md-start mt-3 mt-md-0 ps-md-4">
                <h6 class="fw-bold"><i class="ti ti-map-pin text-primary"></i> Nuestra Ubicación</h6>
                <p class="text-muted mb-0">Pasaje Los Ángeles 4431, Corrientes, Argentina.</p>
            </div>
        </div>
    </div>
</div>

@endsection