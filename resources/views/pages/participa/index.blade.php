@extends('layouts.app')
@section('title', 'Participa - ')
@section('main-content')

    {{-- SECCIÓN HERO (Plantilla base proporcionada) --}}
    <section class="flex items-center justify-center relative">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/discurso.jpg') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white drop-shadow-lg">
                    Participa en Innovación Humana
                </h1>
                <p class="mt-5 text-lg ch-color-white text-center drop-shadow-md animate__animated animate__fadeInUp">
                    En Innovación Humana contamos con dos espacios de interacción para escuchar y responder directamente a las
                    necesidades de la gente.
                </p>
            </div>
        </div>
        <div class="w-full absolute -bottom-1 h-[110px] overflow-hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="h-full w-full">
                <path d="M0.00,49.85 C193.34,212.10 349.20,-49.85 500.00,49.85 L500.00,149.60 L0.00,149.60 Z"
                    class="stroke-none fill-(--color-base-100)"></path>
            </svg>
        </div>
    </section>

    {{-- SECCIÓN 1: ¿CÓMO SER PARTE? --}}
    <section class="py-16 px-4 md:px-8 max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2  gap-6 mb-12">
            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 rounded-full mb-2">
                        <i data-lucide="speech" class="w-8 h-8 ch-color-primary"></i>
                    </div>
                    <h3 class="card-title">Innovación Humana Te Escucha</h3>
                    <p class="text-base">
                        A través de talleres, reuniones, mesas de trabajo y redes sociales, este programa invita a todos los
                        ciudadanos a expresar sus inquietudes y proponer soluciones. Queremos construir los programas de
                        forma participativa, y aquí tendrás la oportunidad de compartir tus ideas y colaborar para mejorar
                        nuestra ciudad.
                    </p>
                </div>
            </div>
            <div class="card bg-base-100 shadow-xl border border-base-200 hover:shadow-2xl transition-all duration-300">
                <div class="card-body items-center text-center">
                    <div class="p-3 rounded-full mb-2">
                        <i data-lucide="user-round" class="w-8 h-8 ch-color-primary"></i>
                    </div>
                    <h3 class="card-title">Innovación Humana Responde</h3>
                    <p class="text-base">
                        Son sesiones en vivo en nuestras redes sociales donde responderemos, en tiempo real, a las preguntas
                        y comentarios de los participantes. Este es tu espacio para plantear dudas y recibir respuestas
                        directas del equipo de Innovación Humana, creando así un diálogo activo y transparente con la comunidad.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
