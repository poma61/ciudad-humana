@extends('layouts.app')
@section('title', 'Participa -')

@section('main-content')

    <section class="flex items-center justify-center">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/prensa-cesar.jpg') }});">
        </div>

        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    Participa en Ciudad Humana
                </h1>
                <p class="mt-5 text-xl ch-color-white animate__animated animate__fadeInUp">
                    Tenemos espacios donde puedes aportar, ser escuchado y participar activamente…
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-6xl mx-auto px-4 animate__animated animate__fadeIn">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="card bg-base-200 shadow-xl p-6 animate__animated animate__fadeInLeft">
                <img src="https://picsum.photos/seed/escucha/600/300" class="rounded mb-3" alt="">
                <h3 class="text-xl font-bold">Ciudad Humana Te Escucha</h3>
                <p class="mt-2">Talleres, reuniones y mesas de trabajo para escuchar a la gente.</p>
            </div>

            <div class="card bg-base-200 shadow-xl p-6 animate__animated animate__fadeInRight">
                <img src="https://picsum.photos/seed/responde/600/300" class="rounded mb-3" alt="">
                <h3 class="text-xl font-bold">Ciudad Humana Responde</h3>
                <p class="mt-2">Sesiones en vivo respondiendo preguntas de la comunidad.</p>
            </div>
        </div>
    </section>

@endsection
