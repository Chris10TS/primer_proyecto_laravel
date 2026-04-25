<?php

use Illuminate\Support\Facades\Route;

Route::get('/sobre-mi', function () {
return view('sobre-mi');
});

use App\Http\Controllers\ContactoController;

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/quienes-somos', function () {
    return view('quienes-somos');
});

Route::get('/comercializacion', function () {
    return view('comercializacion');
});

Route::get('/contacto-oga', function () {
    return view('contacto-oga');
});

Route::get('/terminos', function () {
    return view('terminos');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/productos/camara-seguridade107', function () {
    return view('productos.camara-seguridade107');
});

Route::get('/productos/camara-seguridade126', function () {
    return view('productos.camara-seguridade126');
});