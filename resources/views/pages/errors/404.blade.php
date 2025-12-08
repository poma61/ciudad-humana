@extends('layouts.app')

@section('main-content')
    <div class="flex flex-col items-center justify-center h-100 bg-base-200 mt-10">
        <h1 class="text-7xl font-bold">404</h1>
        <p class="text-2xl mt-4">Ups! Página no encontrada</p>
        <a href="{{ url('/') }}" class="btn mt-6 ch-btn-secondary">
            Ir inicio
        </a>
    </div>
@endsection
