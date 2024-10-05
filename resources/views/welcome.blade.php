@extends('layouts.app')

@section('content')

    <!-- Contenido principal de la página -->
    <div class="container text-center">
        <br>
        <h1 class="text-primary-emphasis">POLICÍA MUNICIPAL DE TRÁNSITO DE PUERTO BARRIOS, IZABAL</h1>
        <br>
    </div>

    <div class="container text-center">
        <br>
        <h2 class="text-primary-emphasis">CONSULTA DE MULTAS</h2>
    </div>

    <!-- APARTADO DE CONSULTAS -->
    <div class="container text-center mt-5">
        <div class="row">
            <div class="col-6 text-center">
                <br>
                <img src="https://cdn-icons-png.flaticon.com/512/20/20699.png" alt="Imagen 1" width="200">
                <h3 class="text-primary-emphasis">Consulta Vehículos</h3>
                <div class="container">
                    <a href="{{url('/buscar')}}" class="btn btn-primary">Realizar Consulta</a>
                </div>
            </div>

            <div class="col-6 text-center">
                <br>
               