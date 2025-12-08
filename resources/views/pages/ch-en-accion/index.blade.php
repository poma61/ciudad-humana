@extends('layouts.app')
@section('title', 'Ciudad Humana en Acción - ')

@section('main-content')

    <section class="flex items-center justify-center">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/reunion-y-cesar.jpg') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    Ciudad Humana en Acción
                </h1>
                <p class="mt-5 text-xl ch-color-white animate__animated animate__fadeInUp">
                    En Ciudad Humana NO podemos esperar a ser autoridades ni estar en gestión pública para hacer lo que es
                    necesario. Estamos comprometidos en apoyar a nuestros vecinos que más lo necesitan, y a través del
                    trabajo voluntario y el respaldo de empresas y familias, estamos generando resultados de gran impacto.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-6">
            @include('pages.ch-en-accion.partials.actividades')
        </div>
    </section>

@endsection
