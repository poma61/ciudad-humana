@extends('layouts.app')
@section('title', 'La Paz 4.0 -')

@section('main-content')

    <section class="flex items-center justify-center">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/la-paz.png') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    La Paz 4.0
                </h1>

                <p class="mt-5 text-xl ch-color-white animate__animated animate__fadeInUp">
                    La Paz 4.0 es una visión moderna donde la innovación, sostenibilidad y bienestar convergen…
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4 animate__animated animate__fadeIn">

        <h2 class="text-3xl font-bold mb-6">Proyectos Priorizados</h2>

        <div class="grid md:grid-cols-2 gap-6">

            @foreach (['Centro de Innovación y Tecnología', 'Turismo de Altura', 'Revitalización del Centro', 'Potenciamiento de Áreas Comerciales', 'Centros Médicos y Atención Virtual', 'Transporte Público Moderno', 'Sistema Integrado de Transporte', 'Ciudad sin Huecos', 'Cambio de Luminarias', 'Prevención de Riesgos y Seguridad', 'Industrialización de Residuos', 'Promoción del Deporte', 'Espacios Culturales', 'Áreas Verdes y Parques'] as $proyecto)
                <div class="card bg-base-200 p-6 shadow-xl animate__animated animate__fadeInUp">
                    <h3 class="text-xl font-bold">{{ $proyecto }}</h3>
                </div>
            @endforeach

        </div>

    </section>

@endsection
