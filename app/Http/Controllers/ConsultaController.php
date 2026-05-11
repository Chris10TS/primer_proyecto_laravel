<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest; 
use App\Models\Consulta; 
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function store_contact(ContactoRequest $request) 
    {
        // Valida usando las reglas de tu ContactoRequest 
        $datos = $request->validated();

        // Guarda en la base de datos
        Consulta::create($datos);

        // Redirige con el mensaje que pide el apunte 
        return redirect()->back()->with('success_message', 'Tu consulta ha sido enviada correctamente');
    }
}