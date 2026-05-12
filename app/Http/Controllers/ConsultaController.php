<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactoRequest; 
use App\Models\Consulta; 
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function index()
    {
        $consultas = Consulta::all();
        
        return view('admin.consultas', compact('consultas'));
    }

    public function store_contact(ContactoRequest $request) 
    {
        $datos = $request->validated();

        Consulta::create($datos);

        return redirect()->back()->with('success_message', 'Tu consulta ha sido enviada correctamente');
    }
}