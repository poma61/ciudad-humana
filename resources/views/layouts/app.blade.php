<!DOCTYPE html>
<html lang="es" data-theme="light" class="scroll-smooth scroll-pt-30">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title> @yield('title', '') Innovación Humana</title>
    {{-- icon --}}
    <link rel="icon" href="{{ asset('assets/icons/teleferico-innovacion-humana.png') }}" type="image/png">
    {{-- CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5.5.8/daisyui.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    @yield('css')
    {{-- Vite --}}
</head>

<body class="bg-base-100 text-base">

    @include('layouts.navbar')

    <main >
        @yield('main-content')
    </main>

    @include('layouts.floating-socials')
    @include('layouts.footer')

    {{-- script --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    @if (in_array(Route::currentRouteName(), config('app.routesNavBarExcluded')) || !empty($is404) )
        <script src="{{ asset('assets/js/navbarRouteExcluded.js') }}"></script>
    @else
        <script src="{{ asset('assets/js/navbar.js') }}"></script>
    @endif
    @yield('script')

    {{-- vite empty --}}
    @vite('resources/js/lucideConfig.js')
    @vite('resources/js/animateConfig.js')
</body>

</html>
