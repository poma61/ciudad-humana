@extends('layouts.app')
@section('title', 'Noticias - ')

@section('main-content')

    <div class="pt-30 p-2">
        <h1 class="text-4xl text-center font-bold text-shadow-lg/20"> Noticias y Novedades</h1>
    </div>

    <section class="py-10 bg-base-100 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Grid mejorado: gap más amplio y alineación --}}
            {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
                <x-card
                    class="relative group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
                    style="animation-delay: 200ms;">
                    <x-slot name="img" src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

                    <x-slot name="title">
                        <h3 class="text-xl font-bold text-base-content">Lorem 1</h3>
                    </x-slot>

                    <x-slot name="text">
                        <p class="text-base">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda nemo aliquam fugiat in iusto
                            quaerat quo eum corrupti cum doloremque tenetur distinctio, facere autem porro nesciunt sint
                            dolore incidunt temporibus?
                        </p>
                        <div class="flex justify-end mt-2">
                            <span class="text-base-content/70 leading-relaxed text-base">
                                14 de diciembre de 2025
                            </span>
                        </div>

                    </x-slot>

                    <div class="absolute top-1 left-1">
                        <p class="badge badge-soft badge-success ">NOTICIA</p>
                    </div>
                </x-card>


                <x-card
                    class="relative group h-full bg-base-100 border border-base-200 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 rounded-2xl overflow-hidden animate__animated animate__fadeInUp"
                    style="animation-delay: 200ms;">
                    <x-slot name="img" src="https://cdn.vuetifyjs.com/images/parallax/material.jpg"
                        class="w-full h-56 object-cover transition-transform duration-500 group-hover:scale-105"></x-slot>

                    <x-slot name="title">
                        <h3 class="text-xl font-bold text-base-content">Lorem 2</h3>
                    </x-slot>

                    <x-slot name="text">
                        <p class="text-base">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda nemo aliquam fugiat in iusto
                            quaerat quo eum corrupti cum doloremque tenetur distinctio, facere autem porro nesciunt sint
                            dolore incidunt temporibus?
                        </p>
                        <div class="flex justify-end mt-2">
                            <span class="text-base-content/70 leading-relaxed text-base">
                                14 de diciembre de 2025
                            </span>
                        </div>

                    </x-slot>

                    <div class="absolute top-1 left-1">
                        <p class="badge badge-soft badge-success ">NOTICIA</p>
                    </div>
                </x-card>
            </div> --}}
            <p class="text-base">
                Estamos trabajando en ello...
            </p>
        </div>
    </section>

@endsection
