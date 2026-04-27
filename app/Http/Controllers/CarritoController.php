<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function ver() {
        return view('carrito');
    }

    public function confirmar(Request $request) {
        $nombre = $request->input('nombre');
        return view('exito-compra', ['nombre' => $nombre]);
    }
}
