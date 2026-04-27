@extends('layouts.app')

@section('titulo', 'Catálogo - Televisores')

@section('contenido')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fw-bold">Especial Mundial: Televisores</h1>
            <p class="text-muted">Conseguí tu pantalla ideal para ver el mundial.</p>
            <hr>
        </div>
    </div>

    <div class="row">
        
        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/televisor-50" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/television-43.png') }}" class="card-img-top p-3" alt="Smart TV 50">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Smart TV 50" 4K UHD Ultra Slim</h5>
                        <p class="card-text text-muted small">La mejor definición para los partidos.</p>
                        <h4 class="fw-bold text-dark">$500.000</h4>
                        <p class="text-primary mb-0 small">12 cuotas sin interés</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/televisor-32" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/tv-32.png') }}" class="card-img-top p-3" alt="Smart TV 32">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Smart TV 32" HD Slim</h5>
                        <p class="card-text text-muted small">Ideal para habitaciones o espacios chicos.</p>
                        <h4 class="fw-bold text-dark">$380.000</h4>
                        <p class="text-primary mb-0 small">12 cuotas sin interés</p>
                    </div>
                </div>
            </a>
        </div>

        <div class="col-md-4 col-sm-6 mb-4">
            <a href="/productos/televisor-55" class="text-decoration-none text-dark">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('images/img-products/tv-55.png') }}" class="card-img-top p-3" alt="Smart TV 55">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Smart TV 55" 4K UHD Ultra Slim</h5>
                        <p class="card-text text-muted small">Pantalla gigante para no perderte nada.</p>
                        <h4 class="fw-bold text-dark">$550.000</h4>
                        <p class="text-primary mb-0 small">12 cuotas sin interés</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endsection