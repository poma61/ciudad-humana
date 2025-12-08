@extends('layouts.app')
@section('title', 'Quiénes Somos -')

@section('main-content')

    <section class="flex items-center justify-center">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/ninos-y-cesar.JPG') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    ¿Quiénes Somos?
                </h1>

                <p class="mt-5 text-xl ch-color-white animate__animated animate__fadeInUp">
                    Somos Ciudad Humana, un movimiento ciudadano que demuestra que se puede hacer política de manera
                    diferente, enfocada en resultados y no en intereses partidistas. No somos un partido político, y tampoco
                    respondemos a uno. Este proyecto le pertenece a la sociedad y busca transformar nuestras ciudades eg
                    espacios de oportunidades, donde la vida y bienestar de cada habitante sean la prioridad.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4 animate__animated animate__fadeIn">
        {{-- MISIÓN Y VISIÓN --}}
        @include('pages.quienes-somos.partials.vision-mision')

        {{-- Ojetivos --}}
        <h2 class="text-3xl font-bold mt-10 mb-2 text-shadow-lg/20">Objetivos</h2>
        <div class="space-y-8">
            @include('pages.quienes-somos.partials.objetivos')
        </div>

        {{-- Historia de ciudad humana --}}
        <h2 class="text-3xl font-bold text-shadow-lg mt-10 mb-2">Historia de Ciudad Humana</h2>
        @include('pages.quienes-somos.partials.historia-ch')


        {{-- VALORES --}}
        <div class="bloque">
            <h2 class="text-3xl font-bold mt-10 mb-2">Valores</h2>
            @include('pages.quienes-somos.partials.valores')
        </div>

        {{-- FUNDAMENTOS --}}
        <h2 class="text-3xl font-bold mt-10 mb-2 text-shadow-lg/20">Fundamentos</h2>
        <div class="space-y-8">
            @include('pages.quienes-somos.partials.fundamentos')
        </div>

    </section>

@endsection
