@extends('layouts.app')
@section('title', 'Noticias y Actualidad - ')

@section('main-content')

    <div class="min-h-screen bg-base-100 pb-20">

        {{-- Encabezado de Sección --}}
        <div class="pt-24 pb-12 text-center animate__animated animate__fadeInDown">
            <h1 class="text-4xl md:text-5xl font-black tracking-tight text-base-content relative inline-block">
                Noticias y Novedades
            </h1>
            <p class="mt-4 text-base-content/60 text-lg">Entérate de los últimos acontecimientos</p>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            @if ($noticias->count() > 0)
                {{-- 1. SECCIÓN HERO: La noticia más reciente destacada --}}
                @php
                    $destacada = $noticias->first();
                    $resto = $noticias->skip(1);
                @endphp

                <div class="mb-16 animate__animated animate__fadeIn">
                    <a href="{{ route('n-noticia-show', $destacada->slug) }}"
                        class="group relative block rounded-3xl overflow-hidden shadow-xl hover:shadow-2xl transition-all duration-300">
                        <div class="grid md:grid-cols-2 min-h-[400px]">
                            {{-- Imagen Destacada --}}
                            <div class="relative h-64 md:h-auto overflow-hidden">
                                <img src="{{ Storage::url($destacada->image) }}" alt="{{ $destacada->titular }}"
                                    class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                                <div
                                    class="absolute inset-0 bg-gradient-to-t md:bg-gradient-to-r from-black/60 to-transparent">
                                </div>
                            </div>

                            {{-- Texto Destacada --}}
                            <div class="bg-base-200 p-8 md:p-12 flex flex-col justify-center relative">
                                <div class="mb-4">
                                    <span class="badge badge-primary badge-lg uppercase font-bold tracking-wider">
                                        {{ $destacada->epigrafe ?? 'RECIENTE' }}
                                    </span>
                                </div>
                                <h2
                                    class="text-3xl md:text-4xl font-black leading-tight mb-4 group-hover:text-primary transition-colors">
                                    {{ $destacada->titular }}
                                </h2>
                                <p class="text-base-content/70 text-lg mb-6 line-clamp-3">
                                    {{ $destacada->lead }}
                                </p>
                                <div class="flex items-center gap-2 text-sm font-medium text-base-content/60 mt-auto">
                                    <i data-lucide="calendar" class="w-4 h-4"></i>
                                    {{ \Carbon\Carbon::parse($destacada->date)->locale('es')->translatedFormat('d M, Y') }}
                                    <span class="mx-2">•</span>
                                    <span class="flex items-center gap-1 text-primary group-hover:underline">
                                        Leer más <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                {{-- 2. GRID: El resto de noticias --}}
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($resto as $item)
                        <article
                            class="card bg-base-100 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-base-200 h-full flex flex-col animate__animated animate__fadeInUp"
                            style="animation-delay: {{ $loop->index * 100 }}ms;">

                            <a href="{{ route('n-noticia-show', $item->slug) }}" class="flex-1 flex flex-col">
                                <figure class="relative h-56 overflow-hidden">
                                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->titular }}"
                                        class="w-full h-full object-cover transition-transform duration-500 hover:scale-110" />

                                    @if ($item->epigrafe)
                                        <div class="absolute top-4 left-4">
                                            <span
                                                class="badge badge-neutral bg-black/70 text-white border-none backdrop-blur-sm uppercase font-bold text-xs">
                                                {{ $item->epigrafe }}
                                            </span>
                                        </div>
                                    @endif
                                </figure>

                                <div class="card-body p-6 flex-1 flex flex-col">
                                    {{-- Fecha pequeña arriba --}}
                                    <div class="text-xs text-base-content/50 font-bold mb-2 flex items-center gap-1">
                                        <i data-lucide="clock" class="w-3 h-3"></i>
                                        {{ \Carbon\Carbon::parse($item->date)->locale('es')->translatedFormat('d M, Y') }}
                                    </div>

                                    <h3
                                        class="card-title text-xl font-bold leading-snug mb-3 hover:text-primary transition-colors">
                                        {{ $item->titular }}
                                    </h3>

                                    {{-- Line clamp es vital para que las tarjetas tengan altura similar visualmente --}}
                                    <p class="text-base-content/70 text-sm line-clamp-3 mb-4 flex-1">
                                        {{ $item->lead }}
                                    </p>

                                    <div class="card-actions justify-end mt-auto pt-4 border-t border-base-200 w-full">
                                        <span class="btn btn-sm btn-ghost gap-2 text-primary pl-0 hover:bg-transparent">
                                            Leer noticia <i data-lucide="arrow-right" class="w-4 h-4"></i>
                                        </span>
                                    </div>
                                </div>
                            </a>
                        </article>
                    @endforeach
                </div>

                {{-- Paginación (si la usas) --}}
                <div class="mt-16 flex justify-center">
                    {{-- {{ $noticias->links() }} --}}
                </div>
            @else
                {{-- Estado Vacío --}}
                <div class="text-center py-20 opacity-70">
                    <div class="bg-base-200 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-4">
                        <i data-lucide="newspaper" class="w-10 h-10"></i>
                    </div>
                    <h3 class="text-xl font-bold">No hay noticias publicadas</h3>
                    <p>Vuelve más tarde para ver las novedades.</p>
                </div>
            @endif

        </div>
    </div>
@endsection
