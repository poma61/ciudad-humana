<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 my-5">
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">

        @foreach ($candidatos as $index => $candidato)
            <div class="card bg-base-200 shadow-xl hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 animate__animated animate__fadeInUp group"
                style="animation-delay: {{ $index * 0.1 }}s ">

                {{-- Área de Imagen --}}
                <figure class="h-80 overflow-hidden relative">

                    {{-- 1. Badge Numérico --}}
                    <div class="absolute top-3 left-3 z-30">
                        <div
                            class="w-10 h-10 rounded-full ch-bg-primary text-white flex items-center justify-center font-bold text-lg shadow-lg border-2 border-white/50">
                            {{ $candidato->n }}
                        </div>
                    </div>

                    {{-- 2. Imagen --}}
                    <img src="{{ Storage::url($candidato->photo) }}" alt="Foto de {{ $candidato->name }}"
                        class="w-full h-full object-cover object-top transition-transform duration-700 group-hover:scale-105" />

                    <div
                        class="absolute bottom-0 left-0 w-full bg-gradient-to-t from-black/70 via-black/30 to-transparent pt-14 pb-4 px-5 z-20 flex items-end">

                        {{-- Contenedor del Texto --}}
                        <div class="flex items-end gap-3 w-full">
                            {{-- Barra de acento --}}
                            <div
                                class="w-1 h-8 ch-bg-primary rounded-full shadow-[0_0_8px_rgba(var(--primary),0.8)] mb-1 shrink-0 opacity-90">
                            </div>

                            <div class="flex flex-col">
                                <span
                                    class="text-white/90 text-[10px] font-bold uppercase tracking-widest mb-0.5 leading-none drop-shadow-sm">
                                    {{ $candidato->genero == 'Masculino' ?  'Candidato' : 'Candidata'   }}
                                </span>
                                <h3
                                    class="text-white text-lg font-extrabold uppercase leading-tight drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)]">
                                    {{ $candidato->ca }}
                                </h3>
                            </div>
                        </div>
                    </div>

                </figure>

                {{-- Cuerpo de la Tarjeta --}}
                <div class="card-body p-6 pt-5">
                    <h2 class="card-title text-xl font-black text-base-content uppercase tracking-tight">
                        {{ $candidato->name }}
                    </h2>

                    <p class="text-base-content/70 text-base mb-4 line-clamp-3 mt-1 leading-relaxed">
                        {{ $candidato->summary }}
                    </p>

                    <div class="card-actions justify-end mt-auto pt-4 border-t border-base-content/10">
                        <a class="btn ch-btn-secondary w-full sm:w-auto gap-2 group-hover:bg-secondary-focus transition-colors"
                            href="{{ route('n-candidatos-show', $candidato->slug) }}">
                            Ver Perfil
                            <i data-lucide="arrow-right" class="w-4 h-4 transition-transform group-hover:translate-x-1">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
