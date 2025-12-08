<!-- FOOTER -->
<footer class="footer bg-base-200 p-10 ch-bg-secondary ch-color-white">
    <nav class="w-full">
        <div class="flex flex-wrap justify-around items-center w-full">

            <div class='flex flex-nowrap m-1'>
                <img class="h-40 md:w-110 md:h-50" src="{{ asset('assets/icons/ch-logo-morado-blanco.png') }}" alt="logo">
            </div>

            <div class="flex flex-col justify-center items-start" style="height: 100%;">
                <div class="m-1">
                    <h1 class="text-4xl font-bold">
                        La Paz, Bolivia
                    </h1>
                </div>

                <div class="flex justify-center items-center m-1">
                    <i data-lucide="map-pin" class="mr-2 ch-color-primary"></i>
                    <h2 class="text-xl">
                        Sanchez Lima 2206, Zona Sopocachi
                    </h2>
                </div>

                <div class="flex justify-center items-center m-1">
                    {{-- Icono de Whatsapp --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24"
                        fill="#A627FC">
                        <path fill="#A627FC"
                            d="M16.6 14c-.2-.1-1.5-.7-1.7-.8c-.2-.1-.4-.1-.6.1c-.2.2-.6.8-.8 1c-.1.2-.3.2-.5.1c-.7-.3-1.4-.7-2-1.2c-.5-.5-1-1.1-1.4-1.7c-.1-.2 0-.4.1-.5c.1-.1.2-.3.4-.4c.1-.1.2-.3.2-.4c.1-.1.1-.3 0-.4c-.1-.1-.6-1.3-.8-1.8c-.1-.7-.3-.7-.5-.7h-.5c-.2 0-.5.2-.6.3c-.6.6-.9 1.3-.9 2.1c.1.9.4 1.8 1 2.6c1.1 1.6 2.5 2.9 4.2 3.7c.5.2.9.4 1.4.5c.5.2 1 .2 1.6.1c.7-.1 1.3-.6 1.7-1.2c.2-.4.2-.8.1-1.2l-.4-.2m2.5-9.1C15.2 1 8.9 1 5 4.9c-3.2 3.2-3.8 8.1-1.6 12L2 22l5.3-1.4c1.5.8 3.1 1.2 4.7 1.2c5.5 0 9.9-4.4 9.9-9.9c.1-2.6-1-5.1-2.8-7m-2.7 14c-1.3.8-2.8 1.3-4.4 1.3c-1.5 0-2.9-.4-4.2-1.1l-.3-.2l-3.1.8l.8-3l-.2-.3c-2.4-4-1.2-9 2.7-11.5S16.6 3.7 19 7.5c2.4 3.9 1.3 9-2.6 11.4" />
                    </svg>
                    <h2 class="text-xl">
                        +591 71520202
                    </h2>
                </div>
                <div class="flex justify-center items-center m-1">
                    <i data-lucide="mail" class="mr-2 ch-color-primary"></i>
                    <h2 class="text-xl">
                        info@ciudadhumana.com
                    </h2>
                </div>
            </div>
        </div>
        <nav class='flex flex-wrap justify-center items-center w-full mt-6'>
            @include('layouts.partials.ft-menu')
        </nav>
    </nav>
    <aside class="flex justify-center items-center w-full">
        <p class="text-base text-center">© {{ now()->year }} Ciudad Humana - Todos los derechos reservados</p>
    </aside>
</footer>
