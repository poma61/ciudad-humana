@extends('layouts.app')
@section('title', 'Innovación Humana en Acción - ')

@section('main-content')
    <section class="flex items-center justify-center relative">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/reunion-y-cesar.jpg') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    Innovación Humana en Acción
                </h1>
                <p class="mt-5 text-lg ch-color-white animate__animated animate__fadeInUp">
                    En Innovación Humana NO podemos esperar a ser autoridades ni estar en gestión pública para hacer lo que es
                    necesario. Estamos comprometidos en apoyar a nuestros vecinos que más lo necesitan, y a través del
                    trabajo voluntario y el respaldo de empresas y familias, estamos generando resultados de gran impacto.
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

    {{-- Agregamos un fondo base sutil para dar profundidad --}}
    <section class="py-20 bg-base-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Grid mejorado: gap más amplio y alineación --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                @include('pages.ch-en-accion.partials.actividades')
            </div>
        </div>
    </section>

@endsection
