<?php

namespace App\Http\Controllers;

use App\Models\Noticia;

class NoticiaController extends Controller
{
    public function index()
    {
        // Ordenar por fecha personalizada (campo 'date') descendente
        $noticias = Noticia::where('published', true)
            ->orderBy('id', 'desc')
            ->get();

        return view('pages.noticias.index', ['noticias' => $noticias]);
    } // index

    public function show(string $slug)
    {
        $noticia = Noticia::where('slug', $slug)->where('published', true)->first();

        return view('pages.noticias.show', ['noticia' => $noticia]);
    }
} // class
