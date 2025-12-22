@props([
    'src' => '',
    'poster' => '',
    'title' => '',
    'subtitle' => '',
])

<div class="video-player-container relative group aspect-video bg-black shadow-2xl overflow-hidden select-none w-full"
    oncontextmenu="return false;" >

    {{-- 1. VIDEO (preload="none" para que no consuma nada al inicio) --}}
    <video class="js-video w-full h-full object-cover relative z-0" src="{{ $src }}" poster="{{ $poster }}"
        controlsList="nodownload" preload="none" disablePictureInPicture playsinline></video>

    {{-- 2. CAPA CLICK --}}
    <div class="js-overlay-click absolute inset-0 z-10 cursor-pointer"></div>

    {{-- 3. TÍTULO --}}
    <div
        class="js-title absolute top-0 left-0 w-full p-6 bg-gradient-to-b from-black/80 to-transparent opacity-100 transition-opacity duration-500 z-10 pointer-events-none">
        <h2 class="text-white text-2xl font-bold tracking-wide drop-shadow-md">{{ $title }}</h2>
        <p class="text-gray-300 text-sm font-medium">{{ $subtitle }}</p>
    </div>

    {{-- 4. BOTÓN PLAY --}}
    <div
        class="js-center-play absolute inset-0 flex items-center justify-center z-10 pointer-events-none transition-opacity duration-300">
        <div class="bg-black/50 rounded-full p-4 border border-white/20 backdrop-blur-sm">
            <i data-lucide="play" class="w-10 h-10 text-white fill-white ml-1"></i>
        </div>
    </div>

    <div
        class="js-loader absolute inset-0 flex items-center justify-center z-20 pointer-events-none hidden bg-black/30 backdrop-blur-sm transition-all">
        <div class="w-20 h-20 border-[3px] border-transparent border-t-(--ch-primary-color) rounded-full animate-spin">
        </div>
    </div>


    {{-- 6. CONTROLES --}}
    <div
        class="js-controls controls-container absolute bottom-0 left-0 w-full px-4 pb-4 pt-12 bg-gradient-to-t from-black/90 via-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 z-20 flex flex-col gap-2">

        <div class="relative w-full h-4 flex items-center group/progress cursor-pointer">
            <input type="range" min="0" max="100" value="0" step="0.1"
                class="js-progress-bar swiper-no-swiping absolute inset-0 w-full h-full opacity-0 z-30 cursor-pointer">
            <div class="w-full h-1 bg-gray-600 rounded-lg pointer-events-none"></div>
            <div
                class="js-progress-fill absolute left-0 top-1/2 -translate-y-1/2 h-1 ch-bg-primary rounded-l pointer-events-none z-20 w-0">
                <div
                    class="absolute right-0 top-1/2 -translate-y-1/2 w-4 h-4 ch-bg-primary rounded-full scale-0 group-hover/progress:scale-100 transition-transform shadow">
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between text-white relative z-30">
            <div class="flex items-center gap-6">
                <button class="js-play-btn hover:text-gray-300 transition p-1">
                    <i data-lucide="play" class="js-icon-play w-7 h-7 fill-current"></i>
                    <i data-lucide="pause" class="js-icon-pause w-7 h-7 fill-current hidden"></i>
                </button>
                <button class="js-rewind-btn hover:text-gray-300 transition group/rewind relative p-1">
                    <i data-lucide="rotate-ccw" class="w-6 h-6"></i>
                    <span class="absolute -bottom-3 left-1/2 -translate-x-1/2 text-[10px] font-bold">10</span>
                </button>
                <div class="flex items-center gap-2 group/vol relative">
                    <i data-lucide="volume-2" class="js-vol-icon w-6 h-6 cursor-pointer z-30 relative"></i>
                    <input type="range" max="1" step="0.1"
                        class="js-vol-bar swiper-no-swiping w-0 overflow-hidden group-hover/vol:w-20 transition-all duration-300 accent-white h-1 bg-gray-500 rounded appearance-none cursor-pointer relative z-30">
                </div>
                <span class="js-time-display text-sm font-medium text-gray-300">00:00</span>
            </div>
            <div class="flex items-center gap-5">
                <span class="text-xs font-bold bg-gray-600/80 px-1 rounded border border-gray-400">HD</span>
                <button class="js-fullscreen-btn hover:text-gray-300 transition p-1">
                    <i data-lucide="maximize" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </div>
</div>
