<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda OGA - Inicio</title>
    <link rel="icon" type="image/png" href="{{ asset('images/img-products/logos.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/img-products/logos.png') }}">    
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <link rel="stylesheet" href="/css/estilos.css">
</head>
<body>


<div class="bg-dark py-1">
    <div class="container d-flex justify-content-center gap-4">
        <a class="nav-link text-white menu-link" href="/inicio">Inicio</a>
        <a class="nav-link text-white menu-link" href="/catalogo">Catálogo</a>
        <a class="nav-link text-white menu-link" href="/comercializacion">Comercialización</a>
        <a class="nav-link text-white menu-link" href="/contacto-oga">Contacto</a>
    </div>
</div>


<nav class="navbar navbar-light border-bottom shadow-sm" style="background-color: #F5793A;">
    <div class="container">

        
        <a class="navbar-brand" href="/inicio">
        <img src="{{ asset('images/img-products/logos.png') }}" alt="Logo Oga" height="70">
        </a>

       
        <form class="d-flex flex-grow-1 mx-4">
            <div class="input-group buscador">
                <input class="form-control" type="search" placeholder="Buscar productos, marcas y más..." aria-label="Buscar">
                <button type="submit">
                    <i class="ti ti-search"></i>
                </button>
            </div>
        </form>

        
        <a href="#" class="btn btn-outline-dark position-relative">
            <img src="/images/carrito.png" class="icono-carrito" alt="carrito">
    
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                0
            </span>
        </a>        

    </div>
</nav>

<main class="py-0">
    @yield('contenido')
</main>

<footer class="bg-light border-top mt-5 pt-4 pb-3 text-muted">
    <div class="container">
        <div class="text-center mb-4">
            <button class="btn btn-outline-secondary btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#infoExtra" aria-expanded="false">
                Más información <i class="ti ti-chevron-down"></i>
            </button>
        </div>

        <div class="collapse mb-4" id="infoExtra">
            <div class="row g-4 text-center text-md-start">
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Acerca de</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/quienes-somos" class="text-muted text-decoration-none">Quiénes Somos</a></li>
                        <li><a href="/terminos" class="text-muted text-decoration-none">Términos y Condiciones</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Ayuda</h6>
                    <ul class="list-unstyled small">
                        <li><a href="/comercializacion" class="text-muted text-decoration-none">Cómo comprar</a></li>
                        <li><a href="/contacto-oga" class="text-muted text-decoration-none">Centro de seguridad</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Redes sociales</h6>
                    <ul class="list-unstyled small">
                        <li><a href="#" class="text-muted text-decoration-none"><i class="ti ti-brand-facebook"></i> Facebook</a></li>
                        <li><a href="#" class="text-muted text-decoration-none"><i class="ti ti-brand-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h6 class="text-dark fw-bold">Contacto</h6>
                    <ul class="list-unstyled small">
                        <li><i class="ti ti-map-pin"></i> Corrientes, Argentina</li>
                        <li><i class="ti ti-mail"></i> tiendaOGA@gmail.com</li>
                    </ul>
                </div>
            </div>
        </div>

        <hr>

        <div class="row align-items-center small">
            <div class="col-md-8">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item"><a href="/inicio" class="text-muted text-decoration-none">Trabajá con nosotros</a></li>
                    <li class="list-inline-item pe-2 ps-2 border-start border-end"><a href="/terminos" class="text-muted text-decoration-none">Términos y condiciones</a></li>
                    <li class="list-inline-item"><a href="/consultas" class="text-muted text-decoration-none">Ayuda</a></li>
                </ul>
                <p class="mb-0">Copyright © 1999-2026 Tienda OGA S.R.L.</p>
                <p class="text-black-50" style="font-size: 0.75rem;">Pasaje Los Ángeles 4431, Piso 2, CP 3400, Corrientes, Arg.</p>
            </div>
            <div class="col-md-4 text-md-end text-center mt-3 mt-md-0">
                <h5 class="fw-bold text-dark mb-0">Tienda OGA</h5>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>