<!DOCTYPE html>
<html lang="es" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> @yield('title', '') Ciudad Humana </title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('assets/icons/ch-icono-muneco.png') }}" type="image/png">
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('css')

    {{-- Vite --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-base-100 text-base">
    @include('layouts.banner')
    @include('layouts.navbar')

    <main id='contenido'>
        @yield('main-content')
    </main>

    <h4 class="mx-5 mt-3 text-3xl font-bold" id="termino" style="display: none"></h4>
    <div class="my-5" id="resultados" style="display: none"></div>

    @include('layouts.floating-socials')
    @include('layouts.footer')

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    @if (empty($is404))
        <script src="{{ asset('assets/js/navbarChangeCss.js') }}"></script>
    @endif
    @yield('script')

    {{-- vite --}}
    @vite('resources/js/lucideConfig.js')
    @vite('resources/js/animateConfig.js')

</body>

</html>
