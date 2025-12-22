@extends('layouts.app')
@section('title', 'Proyectos y Programas -')

@section('main-content')
    <section class="flex items-center justify-center relative">
        <div class="ch-bg-image-fixed w-full h-150 object-cover brightness-60"
            style="background-image: url({{ asset('assets/img/mirador-teleferico.jpg') }});">
        </div>
        <div class="absolute">
            <div class="mt-20 h-full w-full p-2 md:max-w-5xl animate__animated animate__fadeInUp">
                <h1 class="text-center text-5xl font-bold ch-color-white">
                    Proyectos
                </h1>
            </div>
        </div>
        <div class="w-full absolute -bottom-1 h-[110px] overflow-hidden">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" class="h-full w-full">
                <path d="M0.00,49.85 C193.34,212.10 349.20,-49.85 500.00,49.85 L500.00,149.60 L0.00,149.60 Z"
                    class="stroke-none fill-(--color-base-100)"></path>
            </svg>
        </div>
    </section>

    {{-- Carousel --}}
    <section class="my-6 max-w-5xl mx-auto">
        @include('pages.proyectos-y-programas.partials.carousel')
    </section>

    <section class="my-6 max-w-5xl mx-auto">
        @include('pages.proyectos-y-programas.partials.programas')
    </section>
@endsection

@section('script')
    <script>
        // 2. Configuración de Swiper
        var swiper = new Swiper(".proyectoSwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
              navigation: {
                nextEl: ".custom-next",
                prevEl: ".custom-prev"
            },
        });

        var swiper2 = new Swiper(".proyectoSwiper2", {
            spaceBetween: 10,
            thumbs: {
                swiper: swiper
            },
            on: {
                slideChange: function() {
                    // Pausar todos al deslizar
                    document.querySelectorAll('video').forEach(v => v.pause());
                }
            }
        });
    </script>

    <script>
        // --- NUEVA LÓGICA DE VIDEO ---
        function initCustomPlayer(container) {
            const video = container.querySelector('.js-video');
            // Selectores de UI
            const ui = {
                playBtn: container.querySelector('.js-play-btn'),
                iconPlay: container.querySelector('.js-icon-play'),
                iconPause: container.querySelector('.js-icon-pause'),
                centerPlayBtn: container.querySelector('.js-center-play'),
                overlayClick: container.querySelector('.js-overlay-click'),
                progressBar: container.querySelector('.js-progress-bar'),
                progressFill: container.querySelector('.js-progress-fill'),
                timeDisplay: container.querySelector('.js-time-display'),
                loader: container.querySelector('.js-loader'),
                title: container.querySelector('.js-title'),
                rewindBtn: container.querySelector('.js-rewind-btn'),
                volBar: container.querySelector('.js-vol-bar'),
                fullBtn: container.querySelector('.js-fullscreen-btn')
            };

            if (!video || !ui.playBtn) return;

            // ESTADO INTERNO
            let seekTarget = null; // Aquí guardamos el % si el usuario hace click sin cargar

            // 1. FUNCIONES DE UI
            const setBuffering = (isLoading) => {
                if (isLoading) {
                    if (ui.loader) ui.loader.classList.remove('hidden');
                    if (ui.centerPlayBtn) ui.centerPlayBtn.classList.add('hidden');
                } else {
                    if (ui.loader) ui.loader.classList.add('hidden');
                    // Solo mostramos el botón central si está pausado
                    if (video.paused && ui.centerPlayBtn) ui.centerPlayBtn.classList.remove('hidden');
                }
            };

            const updatePlayPauseUI = () => {
                if (video.paused || video.ended) {
                    ui.iconPlay.classList.remove('hidden');
                    ui.iconPause.classList.add('hidden');
                    ui.centerPlayBtn.style.opacity = '1';
                    // Mostrar título
                    if (ui.title) {
                        ui.title.classList.remove('opacity-0', 'group-hover:opacity-100');
                        ui.title.classList.add('opacity-100');
                    }
                } else {
                    ui.iconPlay.classList.add('hidden');
                    ui.iconPause.classList.remove('hidden');
                    ui.centerPlayBtn.style.opacity = '0';
                    // Ocultar título
                    if (ui.title) {
                        ui.title.classList.remove('opacity-100');
                        ui.title.classList.add('opacity-0', 'group-hover:opacity-100');
                    }
                }
            };

            // 2. PLAY / PAUSE ROBUSTO
            const togglePlay = async () => {
                if (video.paused || video.ended) {
                    // Pausar otros videos
                    document.querySelectorAll('video').forEach(v => {
                        if (v !== video) v.pause();
                    });

                    setBuffering(true);
                    try {
                        await video.play();
                    } catch (error) {
                        console.log("Esperando carga...");
                    }
                } else {
                    video.pause();
                    setBuffering(false);
                }
            };

            // 3. LA LÓGICA DE LA BARRA DE PROGRESO (FIX DEFINITIVO)
            const handleSeek = (e) => {
                e.stopPropagation(); // Matar Swiper
                const percent = parseFloat(e.target.value);

                // Actualizar UI INMEDIATAMENTE (Feedback visual)
                ui.progressFill.style.width = percent + '%';

                // VERIFICACIÓN CRÍTICA: ¿El video tiene metadatos (duración)?
                // readyState 0 = HAVE_NOTHING (No sabe nada del video)
                if (video.readyState === 0 || !isFinite(video.duration)) {
                    console.log("Video dormido. Despertando en: " + percent + "%");
                    seekTarget = percent; // Guardamos la intención
                    setBuffering(true);
                    video.load(); // FORZAMOS LA CARGA
                    // NO hacemos video.currentTime aquí porque fallaría
                } else {
                    // Video ya cargado, salto normal
                    const time = (percent / 100) * video.duration;
                    video.currentTime = time;
                }
            };

            // Evento MÁGICO: Se dispara cuando el video por fin sabe cuánto dura
            video.addEventListener('loadedmetadata', () => {
                if (seekTarget !== null) {
                    console.log("Video despertó. Saltando a: " + seekTarget + "%");
                    const time = (seekTarget / 100) * video.duration;
                    video.currentTime = time;
                    seekTarget = null; // Limpiar objetivo
                    video.play(); // Auto-play al saltar (opcional, estilo Netflix)
                }
            });

            // 4. LISTENERS DE EVENTOS

            // Input y Click en la barra
            ui.progressBar.addEventListener('input', handleSeek);
            ui.progressBar.addEventListener('change', handleSeek); // Para asegurar el click final
            ui.progressBar.addEventListener('click', (e) => e.stopPropagation()); // Solo parar burbujeo

            // UI Updates del Video
            video.addEventListener('play', () => {
                updatePlayPauseUI();
                setBuffering(false);
            });
            video.addEventListener('pause', updatePlayPauseUI);
            video.addEventListener('waiting', () => setBuffering(true));
            video.addEventListener('playing', () => setBuffering(false));
            video.addEventListener('canplay', () => setBuffering(false));

            // Time Update (Barra avanzando sola)
            video.addEventListener('timeupdate', () => {
                if (video.duration && isFinite(video.duration)) {
                    const percent = (video.currentTime / video.duration) * 100;
                    // Solo actualizamos si el usuario NO está arrastrando (opcional, aquí simplificado)
                    ui.progressBar.value = percent;
                    ui.progressFill.style.width = percent + '%';

                    // Tiempo texto
                    const current = video.currentTime;
                    const mins = Math.floor(current / 60);
                    const secs = Math.floor(current % 60);
                    ui.timeDisplay.textContent = `${mins}:${secs < 10 ? '0' + secs : secs}`;
                }
            });

            // Botones Generales
            ui.playBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                togglePlay();
            });
            ui.overlayClick.addEventListener('click', togglePlay);

            // Volumen
            if (ui.volBar) {
                ui.volBar.addEventListener('input', (e) => {
                    e.stopPropagation();
                    video.volume = e.target.value;
                });
                ui.volBar.addEventListener('click', (e) => e.stopPropagation());
            }

            // Rewind
            if (ui.rewindBtn) {
                ui.rewindBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (video.readyState > 0) video.currentTime = Math.max(0, video.currentTime - 10);
                });
            }

            // Fullscreen
            if (ui.fullBtn) {
                ui.fullBtn.addEventListener('click', (e) => {
                    e.stopPropagation();
                    if (!document.fullscreenElement) container.requestFullscreen().catch(e => {});
                    else if (document.exitFullscreen) document.exitFullscreen();
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {

            document.querySelectorAll('.video-player-container').forEach(initCustomPlayer);
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Si hay un hash en la URL (ej: #ciudad-pet-friendly)
            if (window.location.hash) {
                const id = window.location.hash.substring(1);
                const element = document.getElementById(id);

                if (element) {
                    // Esperamos un poco a que el navegador termine su renderizado inicial
                    setTimeout(() => {
                        element.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 1200); // 300ms de retraso suelen ser suficientes
                }
            }
        });
    </script>

@endsection
