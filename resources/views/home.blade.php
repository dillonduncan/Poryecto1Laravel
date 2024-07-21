@extends('layouts.app')|

@section('titulo','Principal')
@push('css')
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
@endpush
@section('contenido')
    <div class="max-w-4xl mx-auto px-4">
        <h1>Bienvenido la vista principal</h1>

        <x-alert2 type="info" class="mb-4">
            <x-slot name="title">
                contenido de la alerta
            </x-slot>
            Bienvenido la vista principal
        </x-alert2>
        <p>habla parce</p>
    </div>
@endsection
