<?php

namespace App\Http\Controllers;

use App\Models\Candidato;

class CandidatoController extends Controller
{
    public function index()
    {
        return view('pages.candidatos.index', [
            'candidatos' => Candidato::all(),
        ]);
    }

    public function show(string $slug)
    {
        $candidato = Candidato::where('slug', $slug)->first();

        if ($candidato) {
            return view('pages.candidatos.bio', [
                'candidato' => $candidato,
            ]);

        } else {
            return view('pages.errors.404');
        }

    }
} // class
