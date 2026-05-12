@extends('layouts.app')

@section('titulo', 'Panel de Consultas')

@section('contenido')
<div class="container my-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">Panel de Administración</h1>
            <p class="text-muted">Listado de consultas recibidas de clientes.</p>
            <hr>
        </div>
    </div>

    <div class="card shadow border-dark">
        <div class="card-header bg-dark text-white fw-bold">
            <i class="ti ti-list-details me-2"></i> Mensajes Recibidos
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Teléfono</th>
                            <th>Mensaje</th>
                            <th>Fecha</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($consultas as $consulta)
                            <tr>
                                <td class="fw-bold">#{{ $consulta->id }}</td>
                                <td>{{ $consulta->nombre }}</td>
                                <td>{{ $consulta->email }}</td>
                                <td>{{ $consulta->telefono }}</td>
                                <td>{{ $consulta->mensaje }}</td>
                                <td class="small text-muted">{{ $consulta->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-4 text-muted">
                                    No hay consultas registradas todavía.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <div class="mt-4 text-center">
        <a href="/inicio" class="btn btn-outline-dark btn-sm">Volver al Inicio</a>
    </div>
</div>
@endsection