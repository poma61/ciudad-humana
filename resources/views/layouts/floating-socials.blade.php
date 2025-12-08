<div>
    {{-- Sidebar lateral (desktop/md+) --}}
    <aside class="hidden md:flex fixed right-4 bottom-1/20 mt-20 flex-col gap-2 z-50">
        @include('layouts.partials.btn-socials')
    </aside>

    {{-- Botón flotante / menú para móviles (visible en md-) --}}
    <div class="md:hidden fixed right-4 bottom-4">
        <div class="dropdown dropdown-top">
            <button tabindex="0" class="btn ch-btn-primary btn-circle btn-xl">
                <div class="avatar">
                    <div class="w-11">
                        <img src="{{ asset('assets/icons/icon-socials.png') }}"
                            alt="Icono redes sociales ciudad humana" />
                    </div>
                </div>
            </button>
            <ul tabindex="0" class="dropdown-content mb-2 w-80 flex flex-col gap-2">
                @include('layouts.partials.btn-socials')
            </ul>
        </div>
    </div>
</div>
