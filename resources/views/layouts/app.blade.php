<!DOCTYPE html>
<html lang="es" data-theme="light" class="scroll-smooth scroll-pt-30">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title') Innovación Humana</title>

    {{-- Lógica de Metadatos --}}
    @hasSection('meta_tags')
        {{-- Si es una noticia, carga sus datos específicos --}}
        @yield('meta_tags')
    @else
        {{-- Si NO es noticia (Inicio, Contacto, etc) --}}
        <meta property="og:title" content="Innovación Humana">
        <meta property="og:description" content="Pagina Web Informativa de Innovación Humana.">

        {{-- OPCIÓN A: Si quieres que salga el logo del teleférico por defecto --}}
        <meta property="og:image" content="{{ asset('assets/icons/teleferico-innovacion-humana.png') }}">

        {{-- OPCIÓN B: Si NO quieres imagen, borra la línea de arriba. 
             (Pero ojo: WhatsApp podría agarrar cualquier imagen de la página) --}}
    @endif

    <link rel="icon" href="{{ asset('assets/icons/teleferico-innovacion-humana.png') }}" type="image/png">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('css')
</head>

<body class="bg-base-100 text-base">
    @include('layouts.navbar')

    <main>
        @yield('main-content')
    </main>

    @include('layouts.floating-socials')
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    @if (in_array(Route::currentRouteName(), config('app.routesNavBarExcluded') ?? []) || !empty($is404))
        <script src="{{ asset('assets/js/navbarRouteExcluded.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
    @endif

    @vite('resources/js/lucideConfig.js')
    @vite('resources/js/animateConfig.js')
    @yield('script')
</body>

</html>
