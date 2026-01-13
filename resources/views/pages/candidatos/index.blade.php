@extends('layouts.app')
@section('title', 'Candidatos - ')

@section('main-content')

    <div class="bg-base-100 pt-20">
        <div class="container mx-auto px-4">
            {{-- Encabezado de la Sección --}}
            <div class="text-center mb-12 animate__animated animate__fadeInDown">
                <h1 class="text-4xl font-bold ch-color-primary mb-2">Nuestros Candidatos</h1>
            </div>
        </div>
    </div>

    @include('pages.candidatos.candidatos')
@endsection


