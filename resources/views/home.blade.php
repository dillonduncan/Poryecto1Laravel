@extends('layouts.app')|

@section('contenido')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido la vista principal</h1>

        <x-alert2 type="danger" class="mb-4">
            <x-slot name="title">
                contenido de la alerta
            </x-slot>
            Bienvenido la vista principal
        </x-alert2>
        <p>habla parce</p>
    </div>
@endsection
