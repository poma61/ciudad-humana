@props([
    'title' => null,
    'text' => null,
    'img' => null,
    'actions' => null,
])

<div {{ $attributes->merge(['class' => 'card bg-base-200 shadow-xl']) }}>
    @isset($img)
        <figure>
            @if ($img instanceof \Illuminate\View\ComponentSlot)
                {{-- SLOT: el usuario pasa atributos como src, alt, class, etc. --}}
                <img {{ $img->attributes->merge(['class' => 'ch-card-img', 'alt' => 'Imagenes de Ciudad Humana']) }}>
            @else
                {{-- PROP STRING: tomamos la URL como src --}}
                <img src="{{ $img }}" alt="Imagenes de ciudad humana">
            @endif
        </figure>
    @endisset

    <div class="card-body">
        @isset($title)
            @if ($title instanceof \Illuminate\View\ComponentSlot)
                {{-- Es slot: usuario decide la etiqueta --}}
                <div {{ $title->attributes->merge(['class' => 'card-title']) }}>
                    {{ $title }}
                </div>
            @else
                {{-- Es string (prop): usamos h4 --}}
                <div class="card-title">
                    <h4 class="text-xl font-bold">{{ $title }}</h4>
                </div>
            @endif
        @endisset
        @isset($text)
            @if ($text instanceof \Illuminate\View\ComponentSlot)
                {{-- Es slot: usuario decide la etiqueta --}}
                <p {{ $text->attributes->merge(['class' => 'text-base']) }}> {{ $text }} </p>
            @else
                {{-- Es string (prop): usamos h4 --}}
                <p class = 'text-base'> {{ $text }} </p>
            @endif
        @endisset

        {{-- Si hay contenido extra, se muestra en card-actions --}}
        @isset($actions)
            <div {{ $actions->attributes->merge(['class' => 'card-actions']) }}>
                {{ $actions }}
            </div>
        @endisset
    </div>
    {{ $slot }}
</div>
