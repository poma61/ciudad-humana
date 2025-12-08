<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('n-home');

Route::get('/acerca', function () {
    return view('pages.quienes-somos.index');
})->name('n-quienes-somos');

Route::get('/en-accion', function () {
    return view('pages.ch-en-accion.index');
})->name('n-ch-en-accion');

Route::get('/la-paz-4.0', function () {
    return view('pages.la-paz-40.index');
})->name('n-la-paz-40');

Route::get('/proyectos-y-programas', function () {
    return view('pages.proyectos-y-programas.index');
})->name('n-proyectos-y-programas');

Route::get('/se-parte', function () {
    return view('pages.participa.index');
})->name('n-participa');

// Route::get('/buscar-resultados', function () {
// return view('pages.search-results');
// });

// Esto captura cualquier ruta no definida
Route::fallback(function () {
    return response()->view('pages.errors.404', ['is404' => true], 404);
});


