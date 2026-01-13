<?php

use App\Http\Controllers\CandidatoController;
use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home.index');
})->name('n-home');

Route::get('/acerca', function () {
    return view('pages.quienes-somos.index');
})->name('n-quienes-somos');

Route::get('/biografia-cesar-dockweiler', function () {
    return view('pages.dockweiler.index');
})->name('n-dockweiler');

Route::get('/en-accion', function () {
    return view('pages.ch-en-accion.index');
})->name('n-ch-en-accion');

Route::get('/la-paz-2050', function () {
    return view('pages.la-paz-2050.index');
})->name('n-la-paz-2050');

Route::get('/proyectos-y-programas', function () {
    return view('pages.proyectos-y-programas.index');
})->name('n-proyectos-y-programas');

Route::get('/innovacion-humana-noticias', [NoticiaController::class, 'index'])->name('n-noticia');
Route::get('/innovacion-humana-noticias/{slug}', [NoticiaController::class, 'show'])->name('n-noticia-show');

Route::get('/se-parte', function () {
    return view('pages.unete.index');
})->name('n-unete');


Route::get('/candidatos-innovacion-humana', [CandidatoController::class, "index" ])->name('n-candidatos');


Route::get('/candidatos-innovacion-humana/{slug}', [CandidatoController::class, "show" ])->name('n-candidatos-show');

 

// Esto captura cualquier ruta no definida
Route::fallback(function () {
    return response()->view('pages.errors.404', ['is404' => true], 404);
});

