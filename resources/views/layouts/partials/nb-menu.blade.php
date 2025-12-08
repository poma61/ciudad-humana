
<li class="text-base ch-menu-hover {{ request()->routeIs('n-home') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-home') }}">Inicio</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-quienes-somos') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-quienes-somos') }}">Quiénes Somos ?</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-ch-en-accion') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-ch-en-accion') }}">Ciudad Humana en Acción</a>
</li>
<li class="text-base ch-menu-hover {{ request()->routeIs('n-la-paz-40') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-la-paz-40') }}"> La Paz 4.0</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-proyectos-y-programas') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-proyectos-y-programas') }}">Proyectos y Programas</a>
</li>
<li
    class="text-base ch-menu-hover {{ request()->routeIs('n-participa') ? 'ch-menu-active-line ch-color-secondary' : '' }}">
    <a class='py-4' href="{{ Route('n-participa') }}">Participa</a>
</li>
