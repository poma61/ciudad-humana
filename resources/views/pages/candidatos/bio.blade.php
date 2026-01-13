@extends('layouts.app')
@section('title', 'Candidato ' . $candidato->name . ' - ')

@section('main-content')

    <div
        class="bg-base-100 min-h-screen pt-24 pb-12 bg-[radial-gradient(#e5e7eb_1px,transparent_1px)] [background-size:16px_16px]">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            {{-- Navegación Superior (Breadcrumbs) --}}
            <div
                class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-8 animate__animated animate__fadeInDown">
                <div class="text-sm breadcrumbs text-base-content/60 font-medium">
                    <ul>
                        <li>Candidatos</li>
                        <li class="text-primary font-bold">{{ $candidato->name }}</li>
                    </ul>
                </div>

                <a href="{{ route('n-candidatos') }}"
                    class="btn btn-ghost btn-sm gap-2 pl-0 hover:bg-transparent hover:text-primary mt-2 sm:mt-0 transition-colors">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    Volver al listado
                </a>
            </div>

            {{-- GRID PRINCIPAL --}}
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                <div class="lg:col-span-4 xl:col-span-4 animate__animated animate__fadeInLeft">

                    <div class="card bg-base-200 shadow-xl overflow-hidden border border-base-content/5">
                        {{-- Foto --}}
                        <figure class="aspect-[4/5] relative">
                            <img src="{{ Storage::url($candidato->photo) }}" alt="Foto de {{ $candidato->name }}"
                                class="w-full h-full object-cover object-top" />
                        </figure>

                        {{-- Datos Clave debajo de la foto --}}
                        <div class="card-body p-6 gap-2">
                            <div>
                                <h2 class="text-2xl font-black text-base-content uppercase leading-tight">
                                    {{ $candidato->name }}
                                </h2>
                                <div
                                    class="flex items-center gap-2 mt-2 ch-color-primary font-bold uppercase text-sm tracking-widest">
                                    <i data-lucide="briefcase" class="w-4 h-4"></i>
                                    {{ $candidato->ca }}
                                </div>
                            </div>

                            <div class="divider my-2"></div>

                            {{-- Botones de Acción --}}
                            {{-- <div class="flex flex-col gap-3">
                                <button
                                    class="btn ch-btn-secondary w-full gap-2 shadow-sm uppercase font-bold text-xs tracking-wider">
                                    <i data-lucide="mail" class="w-4 h-4"></i>
                                    Contactar
                                </button>
                            </div> --}}
                        </div>
                    </div>

                </div>

                {{-- COLUMNA DERECHA (Biografía Extendida) --}}
                <div class="lg:col-span-8 xl:col-span-8 animate__animated animate__fadeInUp">

                    <div class="card bg-base-100 shadow-xl border border-base-content/5">
                        <div class="card-body p-8 lg:p-12">

                            {{-- Título Decorativo --}}
                            <div class="flex items-center gap-4 border-b border-base-content/10 mb-10">
                                <div
                                    class="w-12 h-12 rounded-xl ch-bg-primary/10 flex items-center justify-center ch-color-primary">
                                    <i data-lucide="user-check" class="w-6 h-6"></i>
                                </div>
                                <div>
                                    <h3 class="text-2xl font-bold text-base-content">Perfil</h3>
                                    <p class="text-base-content/50 text-sm">Trayectoria, habilidades y experiencia</p>
                                </div>
                            </div>

                            <article
                                class="prose prose-lg max-w-none text-base-content/80 leading-loose  text-justify font-normal">
                                {{-- Letra Capital --}}
                                <span
                                    class="float-left text-6xl font-black text-base-content/20 mt-[-29.5px] line-height-none select-none">
                                    {{ substr($candidato->bio, 0, 1) }}
                                </span>
                                {{ substr($candidato->bio, 1) }}
                            </article>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endsection
