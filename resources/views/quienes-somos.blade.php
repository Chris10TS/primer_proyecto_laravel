@extends('layouts.app')

@section('titulo', 'Quiénes Somos')

@section('contenido')

<div class="row mb-5">
    <div class="col-12 titulo">
        <h1 class="fw-bold">Quiénes Somos</h1>
        <hr>
    </div>
</div>


    <div class="contenedor">
        <h2>Nuestra Historia</h2>
        <p>Tienda OGA nació en el año 2020, en plena pandemia, con la idea de ofrecer productos de calidad a precios accesibles. Lo que comenzó como un emprendimiento familiar, con pocos productos y ventas a través de redes sociales, fue creciendo gracias a la confianza de nuestros clientes y al compromiso constante con el servicio.</p>
        <p>Con el paso del tiempo, fuimos ampliando nuestro catálogo e incorporando nuevas categorías, adaptándonos a las necesidades del mercado. Hoy contamos con más de 6 años de experiencia, ofreciendo desde tecnología como TV Box y proyectores, hasta artículos para mascotas, hogar y mucho más. Nuestro crecimiento se basa en la cercanía con el cliente y en la mejora continua.</p>
    </div>

    <div class="contenedor">
        <h2>Nuestra Misión</h2>
        <p>Brindar a nuestros clientes la mejor experiencia de compra, ofreciendo productos de calidad, precios competitivos y una atención personalizada que genere confianza. Nos enfocamos en acompañar al cliente en todo el proceso, desde la elección del producto hasta la entrega final.</p>
        <p>Además, buscamos facilitar el acceso a la tecnología y a productos útiles para el día a día, garantizando envíos rápidos y seguros a todo el país, con un servicio que se destaque por su responsabilidad y compromiso.</p>
    </div>
        
    <div class="contenedor">    
        <h2 >Nuestra Visión</h2>
        <p>Convertirnos en la tienda multirrubro de referencia de la región, reconocida por la calidad de sus productos, la confianza que genera en sus clientes y su constante innovación. Aspiramos a seguir creciendo de manera sostenida, incorporando nuevas tecnologías y mejorando nuestros servicios.</p>
        <p>Queremos construir una marca sólida, cercana y confiable, que acompañe a nuestros clientes en sus necesidades diarias, adaptándonos a los cambios del mercado y manteniendo siempre un enfoque centrado en el cliente.</p>
    </div>


<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4 titulo">Nuestro Equipo</h2>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 text-center p-3 contenedor-estatico">
            <div class="card-body">
                <h4 class="card-title">Christian Gomez</h4>
                <p class="text-muted">Fundador</p>
                <p class="card-text">Emprendedor correntino que fundó Tienda OGA en 2020 con la visión de crear una tienda multirrubro accesible para todos.</p>
            </div>
        </div>
    </div>
    <div class="col-md-6 mb-3">
        <div class="card h-100 text-center p-3 contenedor-estatico">
            <div class="card-body">
                <h4 class="card-title">Agustina Gomez</h4>
                <p class="text-muted">Programadora</p>
                <p class="card-text">Responsable del desarrollo y mantenimiento de la plataforma digital de Tienda OGA.</p>
            </div>
        </div>
    </div>
</div>

<div class="row mb-5">
    <div class="col-12">
        <h2 class="mb-4">Dónde Estamos</h2>
        <p>Nos encontramos en <strong>Pasaje Los Ángeles 4431, Corrientes, Argentina</strong>.</p>
        <iframe
            src="https://www.google.com/maps?q=Pasaje+Los+Angeles+4431+Corrientes+Argentina&output=embed"
            width="100%"
            height="350"
            style="border:0;"
            allowfullscreen=""
            loading="lazy">
        </iframe>
    </div>
</div>

@endsection