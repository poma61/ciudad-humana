@extends('layouts.app')
@section('title', 'Biografía César Dockweiler - ')

@section('main-content')
    <div class="bg-base-100 pt-20">
        {{-- introduccion biografia --}}
        <section class="hero min-h-[80vh] bg-base-200 relative overflow-hidden">
            <div
                class="absolute top-0 left-0 w-64 h-64  bg-(--ch-secondary-color)/20 rounded-full  -translate-x-1/2 -translate-y-1/2 animate__animated animate__pulse animate__infinite">
            </div>
            <div
                class="absolute bottom-0 right-0 w-96 h-96  bg-(--ch-primary-color)/20 rounded-full translate-x-1/2 translate-y-1/2 animate__animated animate__pulse animate__infinite animate__delay-2s">
            </div>

            <div class="hero-content flex-col lg:flex-row-reverse gap-12 z-0">
                <div class="relative group animate__animated animate__fadeInRight">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-primary to-secondary rounded-box blur opacity-25 group-hover:opacity-75 transition duration-1000 group-hover:duration-200">
                    </div>
                    <img src="{{ asset('assets/img/dockweiler.jpg') }}" alt="César Luís Dockweiler Suarez"
                        class="relative max-w-sm rounded-box shadow-2xl grayscale hover:grayscale-0 transition-all duration-500 object-cover w-full h-[500px]" />
                </div>

                <div class="max-w-2xl text-center lg:text-left animate__animated animate__fadeInLeft">
                    <div class="badge ch-color-primary badge-outline mb-4 p-4 font-bold tracking-widest">FUNDADOR &
                        PRESIDENTE
                    </div>
                    <h1 class="text-5xl lg:text-7xl font-bold mb-4 leading-tight">
                        César Luís Dockweiler Suarez
                    </h1>
                    <p class="py-6 text-lg text-base-content/80 leading-relaxed">
                        César Luis Dockweiler nació en La Paz y creció entre la ciudad y Sorata. Estudió en el Instituto
                        Americano y se formó como economista; luego obtuvo un MBA, una Maestría en Planificación Estratégica
                        y el PhD en Gestión del Desarrollo y Políticas Públicas (UMSA). Sirvió más de dos décadas en la
                        Fuerza Aérea y, ya en la gestión pública, lideró Mi Teleférico entre 2012 y 2019, consolidando la
                        red urbana de teleféricos de La Paz–El Alto. Hoy es presidente de Ciudad Humana y se presenta como
                        candidato a Alcalde de La Paz, con una agenda de ciudad eficiente, humana e innovadora, enfocada en
                        resultados.
                    </p>

                    <div class="flex flex-wrap gap-4 justify-center lg:justify-start">
                        <div class="stats shadow bg-base-100 border border-base-300">
                            <div class="stat place-items-center p-4">
                                <div class="stat-figure ch-color-primary">
                                    <i data-lucide="briefcase" class="w-8 h-8"></i>
                                </div>
                                <div class="stat-title">Experiencia</div>
                                <div class="stat-value ch-color-primary text-2xl">+20 Años</div>
                                <div class="stat-desc">Planificación Estratégica</div>
                            </div>
                        </div>
                        <div class="stats shadow bg-base-100 border border-base-300">
                            <div class="stat place-items-center p-4">
                                <div class="stat-figure ch-color-secondary">
                                    <i data-lucide="map-pin" class="w-8 h-8"></i>
                                </div>
                                <div class="stat-title">Origen</div>
                                <div class="stat-value ch-color-secondary text-2xl">La Paz</div>
                                <div class="stat-desc">Bolivia</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 px-4 container mx-auto">
            <h2 class="text-3xl font-bold text-center mb-12 text-shadow-lg/20 animate__animated animate__fadeInUp">
                Formación <span class="ch-color-primary text-shadow-lg/20">Académica</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div
                    class="card bg-base-100 shadow-xl border-b-4 border-neutral hover:-translate-y-2 transition-transform duration-300 animate__animated animate__fadeInUp animate__delay-1s">
                    <div class="card-body items-center text-center">
                        <div class="p-3 bg-neutral/10 rounded-full mb-2">
                            <i data-lucide="landmark" class="w-8 h-8 text-neutral"></i>
                        </div>
                        <h3 class="card-title text-lg">Secundaria</h3>
                        <p class="text-sm">Instituto Americano</p>
                        <div class="badge badge-ghost">La Paz</div>
                    </div>
                </div>

                <div
                    class="card bg-base-100 shadow-xl border-b-4 border-primary hover:-translate-y-2 transition-transform duration-300 animate__animated animate__fadeInUp animate__delay-2s">
                    <div class="card-body items-center text-center">
                        <div class="p-3 bg-primary/10 rounded-full mb-2">
                            <i data-lucide="graduation-cap" class="w-8 h-8 text-primary"></i>
                        </div>
                        <h3 class="card-title text-lg">Licenciatura</h3>
                        <p class="text-sm">Licenciado en Economía</p>
                        <div class="badge badge-ghost">UAGRM - Santa Cruz</div>
                    </div>
                </div>

                <div
                    class="card bg-base-100 shadow-xl border-b-4 border-secondary hover:-translate-y-2 transition-transform duration-300 animate__animated animate__fadeInUp animate__delay-3s">
                    <div class="card-body items-center text-center">
                        <div class="p-3 bg-secondary/10 rounded-full mb-2">
                            <i data-lucide="book-open" class="w-8 h-8 text-secondary"></i>
                        </div>
                        <h3 class="card-title text-lg">Maestrías</h3>
                        <p class="text-sm">MBA y Magíster en Planificación Estratégica</p>
                    </div>
                </div>

                <div
                    class="card bg-base-100 shadow-xl border-b-4 border-accent hover:-translate-y-2 transition-transform duration-300 animate__animated animate__fadeInUp animate__delay-4s">
                    <div class="card-body items-center text-center">
                        <div class="p-3 bg-accent/10 rounded-full mb-2">
                            <i data-lucide="award" class="w-8 h-8 text-accent"></i>
                        </div>
                        <h3 class="card-title text-lg">Doctorado</h3>
                        <p class="text-sm">Doctor en Políticas Públicas y Desarrollo</p>
                    </div>
                </div>


            </div>
        </section>

        {{-- linea del tiempo --}}
        <section class="bg-base-200 py-20">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-bold text-center mb-16 text-shadow-lg/20">Trayectoria <span
                        class="ch-color-secondary text-shadow-lg/20">Profesional</span>
                </h2>

                <ul class="timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">

                    {{-- HITO 1: Formación y Primeros Años --}}
                    <li>
                        <div class="timeline-middle">
                            <i data-lucide="graduation-cap" class="ch-color-primary"></i>
                        </div>
                        <div class="timeline-start md:text-end mb-10 md:px-4 animate__animated animate__fadeInLeft">
                            <time class="font-mono italic text-sm opacity-70">1986 - 2009</time>
                            <div class="text-lg font-black mt-1">Formación Integral y Disciplina</div>
                            <p class="text-sm md:text-base mt-2">
                                Inicia su carrera con una sólida formación dual. Se gradúa como **Piloto Militar** (FAB) y
                                paralelamente obtiene la licenciatura en **Economía**.
                                Complementa su perfil con dos maestrías: un MBA y una Maestría en Planificación Estratégica,
                                destacando siempre con excelencia académica.
                            </p>
                        </div>
                        <hr class="ch-bg-primary" />
                    </li>

                    {{-- HITO 2: Consultoría y Estrategia --}}
                    <li>
                        <hr class="ch-bg-primary" />
                        <div class="timeline-middle">
                            <i data-lucide="briefcase" class="ch-color-secondary"></i>
                        </div>
                        <div class="timeline-end mb-10 md:px-4 animate__animated animate__fadeInRight">
                            <time class="font-mono italic text-sm opacity-70">Pre-2010</time>
                            <div class="text-lg font-black mt-1">Consultoría Estratégica</div>
                            <p class="text-sm md:text-base mt-2">
                                Funda y dirige empresas de desarrollo organizacional. Trabaja como consultor experto para
                                **organismos internacionales y el sector privado**,
                                liderando proyectos de reestructuración empresarial, cadenas productivas y planificación
                                estratégica antes de asumir cargos públicos.
                            </p>
                        </div>
                        <hr class="ch-bg-secondary" />
                    </li>

                    {{-- HITO 3: Diseño del Sistema (Viceministerio) --}}
                    <li>
                        <hr class="ch-bg-secondary" />
                        <div class="timeline-middle">
                            <i data-lucide="map" class="ch-color-primary"></i>
                        </div>
                        <div class="timeline-start md:text-end mb-10 md:px-4 animate__animated animate__fadeInLeft">
                            <time class="font-mono italic text-sm opacity-70">2010 - 2014</time>
                            <div class="text-lg font-black mt-1">Diseño de la Movilidad Urbana</div>
                            <p class="text-sm md:text-base mt-2">
                                Se incorpora al Viceministerio de Transportes. Realiza los estudios técnicos que
                                determinaron que el **teleférico** era la solución ideal para La Paz y El Alto.
                                Asume como Coordinador General para la implementación de las primeras tres líneas (Roja,
                                Amarilla y Verde).
                            </p>
                        </div>
                        <hr class="ch-bg-primary" />
                    </li>

                    {{-- HITO 4: Gestión Mi Teleférico --}}
                    <li>
                        <hr class="ch-bg-primary" />
                        <div class="timeline-middle">
                            <i data-lucide="cable-car" class="ch-color-secondary"></i>
                        </div>
                        <div class="timeline-end mb-10 md:px-4 animate__animated animate__fadeInRight">
                            <time class="font-mono italic text-sm opacity-70">2014 - 2019</time>
                            <div class="text-lg font-black mt-1">Gestión de Alto Impacto</div>
                            <p class="text-sm md:text-base mt-2">
                                Como Gerente Ejecutivo de <span class="font-bold text-primary">Mi Teleférico</span>, lidera
                                la construcción de **10 líneas interconectadas**,
                                logrando la red más extensa del mundo. Su gestión se caracterizó por la sostenibilidad
                                financiera, cero accidentes y la creación de la "Cultura Teleférico".
                            </p>
                        </div>
                        <hr class="ch-bg-secondary" />
                    </li>

                    {{-- HITO 5: Actualidad (Ciudad Humana) --}}
                    <li>
                        <hr class="ch-bg-secondary" />
                        <div class="timeline-middle">
                            <i data-lucide="heart-handshake" class="ch-color-secondary"></i>
                        </div>
                        <div class="timeline-start md:text-end mb-10 md:px-4 animate__animated animate__fadeInLeft">
                            <time class="font-mono italic text-sm opacity-70">2020 - Actualidad</time>
                            <div class="text-lg font-black mt-1">Liderazgo en Ciudad Humana</div>
                            <p class="text-sm md:text-base mt-2">
                                Obtiene su **Ph.D. en Gestión del Desarrollo** (2024). Funda **Ciudad Humana**,
                                consolidándola como agrupación política en 2025.
                                Actualmente impulsa una visión de ciudad centrada en la vida y el bienestar, perfilándose
                                como candidato para 2026.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        {{-- frase de vida --}}
        <section class="py-24 bg-gradient-to-br from-neutral  relative">
            <div class="container mx-auto px-4 text-center max-w-4xl relative z-0">
                <i data-lucide="quote" class="w-12 h-12 mx-auto mb-6 ch-color-primary"></i>
                <h3 class="text-2xl md:text-4xl  italic leading-normal mb-8">
                    "Es fundamental que construyas tu vida ehn función de lo que te apasiona."
                </h3>
                <div class="flex flex-col items-center gap-2">
                    <span class="font-bold text-lg">César Luís Dockweiler Suarez</span>
                    <span class="text-sm opacity-70">Presidente, Ciudad Humana</span>
                </div>

                <div class="mt-12">
                    <a href="https://wa.link/b44pbz"
                        class="btn ch-btn-primary btn-wide rounded-full animate__animated animate__pulse animate__infinite">
                        Contactar
                        <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
