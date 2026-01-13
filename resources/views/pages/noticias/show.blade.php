@extends('layouts.app')

{{-- Usamos el titular para el título de la pestaña --}}
@section('title', $noticia ? $noticia->titular : '' . ' - ')

@section('meta_tags')
    @if($noticia)
        {{-- OPEN GRAPH (Facebook, WhatsApp, LinkedIn) --}}
        <meta property="og:title" content="{{ $noticia->titular }}">
        <meta property="og:description" content="{{ Str::limit($noticia->lead, 120) }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="article">
        
        {{-- IMPORTANTE: Usar asset('storage/...') asegura que salga la URL completa (http://...) --}}
        <meta property="og:image" content="{{ asset('storage/' . $noticia->image) }}">

        {{-- TWITTER --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $noticia->titular }}">
        <meta name="twitter:description" content="{{ Str::limit($noticia->lead, 120) }}">
        <meta name="twitter:image" content="{{ asset('storage/' . $noticia->image) }}">
    @endif
@endsection


@section('main-content')

    <div class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-base-100 min-h-screen">
        @if ($noticia)
            <article class="max-w-4xl mx-auto">

                {{-- Botón Volver --}}
                <div class="mb-8 animate__animated animate__fadeInLeft">
                    <a href="{{ route('n-noticia') }}"
                        class="btn btn-ghost gap-2 pl-0 hover:bg-transparent hover:text-primary transition-colors group">
                        <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
                        Volver a noticias
                    </a>
                </div>

                {{-- CABECERA PERIODÍSTICA --}}
                <header class="text-center mb-10 animate__animated animate__fadeInDown">

                    {{-- 1. Epígrafe (Texto pequeño sobre el título) --}}
                    @if ($noticia->epigrafe)
                        <div class="mb-3">
                            <span class="uppercase tracking-widest text-sm font-bold text-primary">
                                {{ $noticia->epigrafe }}
                            </span>
                        </div>
                    @endif

                    {{-- 2. Titular (Título principal) --}}
                    <h1
                        class="text-3xl md:text-5xl lg:text-6xl font-black text-base-content mb-4 leading-tight text-shadow-sm">
                        {{ $noticia->titular }}
                    </h1>

                    {{-- 3. Subtítulo (Bajada) --}}
                    @if ($noticia->subtitulo)
                        <h2
                            class="text-xl md:text-2xl text-base-content/70 font-medium leading-relaxed max-w-2xl mx-auto mb-6">
                            {{ $noticia->subtitulo }}
                        </h2>
                    @endif

                    {{-- Fecha y Metadatos --}}
                    <div class="flex items-center justify-center gap-2 text-sm text-base-content/60 py-2">
                        <i data-lucide="clock" class="w-4 h-4"></i>
                        <time datetime="{{ $noticia->date }}">
                            {{ \Carbon\Carbon::parse($noticia->date)->locale('es')->translatedFormat('d \d\e F, Y') }}
                        </time>
                    </div>
                </header>

                {{-- 4. Imagen Principal --}}
                @if ($noticia->image)
                    <figure
                        class="relative mb-10 rounded-3xl overflow-hidden shadow-2xl animate__animated animate__fadeIn animate__delay-1s group">
                        <img src="{{ Storage::url($noticia->image) }}" alt="{{ $noticia->titular }}"
                            class="w-full h-auto max-h-[600px] object-cover object-center transition-transform duration-700 group-hover:scale-105">
                    </figure>
                @endif

                {{-- CONTENIDO DE LA NOTICIA --}}
                <div class="animate__animated animate__fadeInUp animate__delay-1s">

                    {{-- 5. Lead (Entradilla/Resumen destacado) --}}
                    @if ($noticia->lead)
                        <div class="bg-base-200/50 p-6 md:p-8 rounded-2xl border-l-4 border-primary mb-10">
                            <p class="text-lg text-base-content/90 italic">
                                {{ $noticia->lead }}
                            </p>
                        </div>
                    @endif

                    {{-- 6. Cuerpo (Contenido HTML principal) --}}
                    <div class="prose prose-lg  max-w-none text-base-content/80 text-justify">
                        {!! $noticia->cuerpo !!}
                    </div>
                </div>

                <div class="mt-16 pt-8 border-t border-base-300 gap-4 animate__animated animate__fadeIn animate__delay-2s">
                    <div class="flex justify-end">
                        <span class="text-base-content/60">Innovación Humana</span>
                    </div>
                </div>

            </article>
        @else
            <article class="max-w-4xl mx-auto">
                {{-- Botón Volver --}}
                <div class="mb-8 animate__animated animate__fadeInLeft">
                    <a href="{{ route('n-noticia') }}"
                        class="btn btn-ghost gap-2 pl-0 hover:bg-transparent hover:text-primary transition-colors group">
                        <i data-lucide="arrow-left" class="w-5 h-5 group-hover:-translate-x-1 transition-transform"></i>
                        Volver a noticias
                    </a>
                </div>
                <p class="text-center">Esta noticia ya no esta disponible.</p>
            </article>
        @endif

    </div>

@endsection
