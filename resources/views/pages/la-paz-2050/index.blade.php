@extends('layouts.app')
@section('title', 'La Paz 2050 - Ejes Estratégicos')

@section('main-content')

    {{-- HERO SECTION (Tu código original) --}}
    <section class="flex items-center justify-center relative">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/la-paz.png') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white text-white drop-shadow-lg">
                    La Paz 2050
                </h1>
                <p class="text-center text-xl text-white/90 mt-4 font-light tracking-wide">
                    Plan Integral de Desarrollo
                </p>
            </div>
        </div>
    </section>

    @include('pages.la-paz-2050.partials.ejes')

@endsection
