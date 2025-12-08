@extends('layouts.app')
@section('title', 'Proyectos y Programas -')

@section('main-content')

    <section class="flex items-center justify-center">
        <div  class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/mirador-teleferico.jpg') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    Proyectos y Programas
                </h1>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4">

        <div class="grid md:grid-cols-3 gap-8">

            @foreach (['Ciudad Segura', 'Ciudad Moderna', 'Ciudad Sostenible', 'Ciudad Transparente', 'Ciudad Inteligente', 'Ciudad Inclusiva', 'Ciudad Vital', 'Ciudad Verde', 'Ciudad Resiliente', 'Ciudad Digital', 'Ciudad de la Tecnología', 'Ciudad del Turismo de Altura', 'Ciudad de la Cultura', 'Ciudad Cero Desperdicio', 'Ciudad Pet Friendly', 'Ciudad de la Energía Renovable', 'Ciudad de la Juventud', 'Ciudad Eficiente', 'Ciudad Integradora y Participativa', 'Ciudad de Oportunidades'] as $prog)
                <div class="card bg-base-200 shadow-xl p-6 animate__animated animate__zoomIn">
                    <img src="https://picsum.photos/seed/{{ Str::slug($prog) }}/400/250" class="rounded mb-3"
                        alt="">
                    <h3 class="text-xl font-bold">{{ $prog }}</h3>
                </div>
            @endforeach

        </div>

    </section>

@endsection
