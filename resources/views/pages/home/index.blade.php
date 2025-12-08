@extends('layouts.app')

@section('main-content')
    <!-- Swiper -->
    <div class="swiper mySwiper ch-swiper-navigation-color-secondary ch-swiper-pagination-color-secondary">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/ch-01.JPG') }}" alt="Imagen Ciudad Humana">
                <div class="absolute animate__animated animate__fadeInUp">
                    <div class="max-w-3xl p-10 m-5 md:m-10">
                        <h1 class="text-5xl font-bold mb-4  ch-color-white">
                            Bienvenido a Ciudad Humana
                        </h1>
                        <p class="text-xl ch-color-white">
                            En Ciudad Humana, creemos en un futuro donde cada habitante pueda florecer en un entorno que
                            prioriza la vida, el bienestar y, sobre todo, la innovación.
                        </p>
                        <div class="mt-10">
                            <a href="{{ route('n-participa') }}" class="ch-btn-neon-pulse">
                                Únete a Nosotros
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <img src="{{ asset('assets/img/ch-02.png') }}" alt="Imagen Ciudad Humana" style="">
                <div class="absolute">
                    <div class="max-w-3xl p-10 m-5 md:m-10">
                        <h4
                            class="text-shadow-lg/20 text-5xl font-bold mb-4 animate__animated animate__fadeInUp ch-color-white">
                            El teleférico la mejor alternativa
                        </h4>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <img src="{{ asset('assets/img/ch-03.jpg') }}" alt="Imagen Ciudad Humana" style="filter: brightness(90%);">
                <div class="absolute">
                    <div class="max-w-3xl p-10 m-5 md:m-10">
                        <h4
                            class="text-shadow-lg/20 text-5xl font-bold mb-4 animate__animated animate__fadeInUp ch-color-white">
                            Un sueño hecho realidad
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    @include('pages.home.partials.principales-programas-ch')

    @include('pages.home.partials.explora-ch')
@endsection

@section('script')
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 1,
            centeredSlides: true,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            //  effect: "fade",
            loop: true,
        });
    </script>
@endsection
