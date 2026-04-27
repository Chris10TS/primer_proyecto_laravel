@extends('layouts.app')

@section('titulo', 'Productos de Seguridad')

@section('contenido')

<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Productos de Seguridad</h1>
            <p class="text-muted">Protegé tu hogar con la mejor tecnología de vigilancia.</p>
            <hr>
        </div>
    </div>

    {{-- Contenedor principal de la grilla --}}
    <div class="row">
        
        {{-- Cámara E107 --}}
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/camara-seguridade107" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/camaraseguridade107.png') }}" class="card-img-top p-3" alt="Cámara E107">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Cámara WiFi LUO E107</h5>
                        <p class="card-text text-muted small">Cámara doble visor para exterior.</p>
                        <h4 class="fw-bold text-dark">$50.000</h4>
                    </div>
                </div>
            </a>
        </div>

        {{-- Cámara E126 --}}
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/camara-seguridade126" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/camara-luo-e126.png') }}" class="card-img-top p-3" alt="Cámara E126">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Cámara WiFi LUO E126</h5>
                        <p class="card-text text-muted small">Cámara triple visor con gran alcance.</p>
                        <h4 class="fw-bold text-dark">$60.000</h4>
                    </div>
                </div>
            </a>
        </div>

        {{-- Kit E121 --}}
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/camara-e121" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/kit-camaras-e121.png') }}" class="card-img-top p-3" alt="Kit E121">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Kit 4 Cámaras + DVR LUO</h5>
                        <p class="card-text text-muted small">Sistema completo con cables incluidos.</p>
                        <h4 class="fw-bold text-dark">$154.000</h4>
                    </div>
                </div>
            </a>
        </div>

        {{-- Kit E122 --}}
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/camara-e122" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/kit-camaras-e122.png') }}" class="card-img-top p-3" alt="Kit E122">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Kit 8 Cámaras + DVR LUO</h5>
                        <p class="card-text text-muted small">Vigilancia total para grandes comercios.</p>
                        <h4 class="fw-bold text-dark">$231.000</h4>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>

@endsection