<li class="text-base ch-menu-hover {{ request()->routeIs('n-home') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-home') }}">Inicio</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-quienes-somos') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-quienes-somos') }}">Quiénes Somos ?</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-dockweiler') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-dockweiler') }}">Biografía César Dockweiler</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-ch-en-accion') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-ch-en-accion') }}">Innovación Humana en Acción</a>
</li>

<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-la-paz-2050') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-la-paz-2050') }}"> La Paz 2050</a>
</li>

<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-proyectos-y-programas') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-proyectos-y-programas') }}">Proyectos Priorizados</a>
</li>

{{-- <li 
    class="text-base ch-menu-hover {{ request()->routeIs('n-participa') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-participa') }}">Candidatos</a>
</li> --}}

<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-noticia') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-3' href="{{ Route('n-noticia') }}">Noticias</a>
</li>
