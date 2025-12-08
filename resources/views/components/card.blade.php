@props([
    'title' => null,
    'text' => null,
    'img' => null,
    'imgAlt' => '',
    'imgClass' => '',
    'titleClass' => '',
    'textClass' => '',
    'actionsClass' => '',
])

<div {{ $attributes->merge(['class' => 'card p-2 bg-base-200 shadow-xl']) }}>
    @if ($img)
        <figure>
            <img src="{{ $img }}" alt="{{ $imgAlt }}" class="rounded {{ $imgClass }}">
        </figure>
    @endif

    <div class="card-body">

        @if ($title)
            <h4 class="card-title text-xl font-bold {{ $titleClass }}">
                {{ $title }}
            </h4>
        @endif

        @if ($text)
            <p class="text-base {{ $textClass }}">
                {{ $text }}
            </p>
        @endif

        {{-- Si hay contenido extra, se muestra en card-actions --}}
        @if (trim($slot))
            <div class="card-actions {{ $actionsClass }}">
                {{ $slot }}
            </div>
        @endif
    </div>
</div>
