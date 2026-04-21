@extends('layouts.app')

@section('titulo', 'Catálogo')

@section('contenido')

<div class="row mb-4">
    <div class="col-12">
        <h1 class="fw-bold">Catálogo de Productos</h1>
        <hr>
    </div>
</div>

<h2 class="mb-3">🖥️ Tecnología</h2>
<div class="row mb-5">
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/tv-box.png') }}" class="card-img-top" alt="TV Box">
            <div class="card-body">
                <h5 class="card-title">TV Box</h5>
                <p class="card-text text-muted">Convertí tu televisor en un Smart TV con nuestro TV Box Android.</p>
                <p class="fw-bold text-dark">$25.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/proyector.png') }}" class="card-img-top" alt="Proyector">
            <div class="card-body">
                <h5 class="card-title">Proyector</h5>
                <p class="card-text text-muted">Proyector portátil HD ideal para cine en casa o presentaciones.</p>
                <p class="fw-bold text-dark">$85.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/auriculares.png') }}" class="card-img-top" alt="Auriculares">
            <div class="card-body">
                <h5 class="card-title">Auriculares Bluetooth</h5>
                <p class="card-text text-muted">Auriculares inalámbricos con cancelación de ruido y 20hs de batería.</p>
                <p class="fw-bold text-dark">$18.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/teclado.png') }}" class="card-img-top" alt="Teclado">
            <div class="card-body">
                <h5 class="card-title">Teclado Inalámbrico</h5>
                <p class="card-text text-muted">Teclado bluetooth compatible con PC, tablet y celular.</p>
                <p class="fw-bold text-dark">$12.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/mouse.png') }}" class="card-img-top" alt="Mouse">
            <div class="card-body">
                <h5 class="card-title">Mouse Inalámbrico</h5>
                <p class="card-text text-muted">Mouse ergonómico inalámbrico con receptor USB.</p>
                <p class="fw-bold text-dark">$8.000</p>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-3">🏠 Hogar</h2>
<div class="row mb-5">
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/picaporte.png') }}" class="card-img-top" alt="Picaporte">
            <div class="card-body">
                <h5 class="card-title">Picaporte de Seguridad</h5>
                <p class="card-text text-muted">Picaporte metálico de alta resistencia para puertas de interior y exterior.</p>
                <p class="fw-bold text-dark">$5.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/lampara.png') }}" class="card-img-top" alt="Lámpara">
            <div class="card-body">
                <h5 class="card-title">Lámpara LED</h5>
                <p class="card-text text-muted">Lámpara LED de bajo consumo con luz cálida y fría regulable.</p>
                <p class="fw-bold text-dark">$4.500</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/ventilador.png') }}" class="card-img-top" alt="Ventilador">
            <div class="card-body">
                <h5 class="card-title">Ventilador de Mesa</h5>
                <p class="card-text text-muted">Ventilador silencioso de 3 velocidades ideal para escritorio.</p>
                <p class="fw-bold text-dark">$15.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/organizador.png') }}" class="card-img-top" alt="Organizador">
            <div class="card-body">
                <h5 class="card-title">Organizador de Cables</h5>
                <p class="card-text text-muted">Kit organizador de cables para mantener tu espacio ordenado.</p>
                <p class="fw-bold text-dark">$2.500</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/multienchufe.png') }}" class="card-img-top" alt="Multienchufe">
            <div class="card-body">
                <h5 class="card-title">Multienchufe con USB</h5>
                <p class="card-text text-muted">Multienchufe con 4 tomas y 2 puertos USB de carga rápida.</p>
                <p class="fw-bold text-dark">$7.000</p>
            </div>
        </div>
    </div>
</div>

<h2 class="mb-3">🔒 Seguridad</h2>
<div class="row mb-5">
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/camara.png') }}" class="card-img-top" alt="Cámara">
            <div class="card-body">
                <h5 class="card-title">Cámara de Seguridad WiFi</h5>
                <p class="card-text text-muted">Cámara IP 1080p con visión nocturna y acceso remoto desde el celular.</p>
                <p class="fw-bold text-dark">$35.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/cerradura.png') }}" class="card-img-top" alt="Cerradura">
            <div class="card-body">
                <h5 class="card-title">Cerradura Digital</h5>
                <p class="card-text text-muted">Cerradura con código numérico y llave de emergencia.</p>
                <p class="fw-bold text-dark">$45.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/alarma.png') }}" class="card-img-top" alt="Alarma">
            <div class="card-body">
                <h5 class="card-title">Alarma para Puerta</h5>
                <p class="card-text text-muted">Alarma magnética de 120db para puertas y ventanas.</p>
                <p class="fw-bold text-dark">$6.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/candado.png') }}" class="card-img-top" alt="Candado">
            <div class="card-body">
                <h5 class="card-title">Candado de Seguridad</h5>
                <p class="card-text text-muted">Candado de acero inoxidable con combinación de 4 dígitos.</p>
                <p class="fw-bold text-dark">$4.000</p>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        <div class="card h-100">
            <img src="{{ asset('images/productos/sensor.png') }}" class="card-img-top" alt="Sensor">
            <div class="card-body">
                <h5 class="card-title">Sensor de Movimiento</h5>
                <p class="card-text text-muted">Sensor infrarrojo de movimiento con alerta por WiFi al celular.</p>
                <p class="fw-bold text-dark">$12.000</p>
            </div>
        </div>
    </div>
</div>

@endsection