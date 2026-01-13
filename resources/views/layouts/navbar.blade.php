<!-- NAVBAR -->
<nav class="navbar shadow-md z-50 ch-bg-transparent absolute p-0 m-0" id="navbar">
    <div class="navbar-start">
        <div class="drawer xl:hidden">
            <input id="my-drawer-1" type="checkbox" class="drawer-toggle" />
            <div class="drawer-content">
                <!-- Page content here -->
                <label for="my-drawer-1" class='btn'>
                    <i data-lucide='menu'></i>
                </label>
            </div>
            <div class="drawer-side">
                <label for="my-drawer-1" aria-label="close sidebar" class="drawer-overlay"></label>
                <ul class="menu bg-base-100 min-h-full w-80 p-5 pt-15">
                    @include('layouts.partials.nb-menu')
                </ul>
            </div>
        </div>
        <div class="hidden xl:block">
            <a href="{{ Route('n-home') }}">
                <img src="{{ asset('assets/icons/innovacion-humana.png') }}" alt="logo"
                    style="height: 50px; width: 120px">
            </a>
        </div>
    </div>

    <div class="navbar-center ch-bg-transparent ch-color-white min-w-40" id="navbar-center">
        <ul class="menu menu-horizontal hidden xl:flex">
            @include('layouts.partials.nb-menu')
        </ul>
        <a href="{{ route('n-home') }}" class="xl:hidden w-full flex justify-center">
            <img src="{{ asset('assets/icons/innovacion-humana.png') }}" alt="logo"
                style="height: 50px; width: 120px">
        </a>
    </div>

    <div class="navbar-end mr-2" id="navbar-end">
        <label class="toggle text-base-content" style="border: 1px solid #aaaaaa">
            <input type="checkbox" value="dark" class="theme-controller" />
            <svg aria-label="sun" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 2v2"></path>
                    <path d="M12 20v2"></path>
                    <path d="m4.93 4.93 1.41 1.41"></path>
                    <path d="m17.66 17.66 1.41 1.41"></path>
                    <path d="M2 12h2"></path>
                    <path d="M20 12h2"></path>
                    <path d="m6.34 17.66-1.41 1.41"></path>
                    <path d="m19.07 4.93-1.41 1.41"></path>
                </g>
            </svg>

            <svg aria-label="moon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2" fill="none" stroke="currentColor">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </g>
            </svg>

        </label>
        <a class="btn m-1 ch-btn-primary" href="{{ route('n-unete') }}">Únete</a>
    </div>
</nav>
