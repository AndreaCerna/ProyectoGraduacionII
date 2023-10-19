@extends('layouts.app')

@section('content')
    <body>
    <h1 class="j">Benvenidos</h1>

    <div class="galeria" >
        <a href="{{url('/cargos')}}">
            <div class="piee">
                <h1 class="jj">Cargos</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/elementos')}}">
            <div class="pie">
                <h1 class="j">Elementos</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/multas')}}">
            <div class="pie">
                <h1 class="jjj">Multas</h1>
            </div>
        </a>
    </div>

    <div class="galeria">
        <a href="{{url('/usuarios')}}">
            <div class="pi">
                <h1 class="c">Usuarios</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/vehiculos')}}">
            <div class="pi">
                <h1 class="c">Vehiculos</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/tipo-placas')}}">
            <div class="pi">
                <h1 class="c">Tipo placas</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/buscar')}}">
            <div class="pi">
                <h1 class="c">Buscar</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/personas')}}">
            <div class="pi">
                <h1 class="c">Personas</h1>
            </div>
        </a>
    </div>
    <div class="galeria">
        <a href="{{url('/buscarP')}}">
            <div class="pi">
                <h1 class="c">Buscar Personas</h1>
            </div>
        </a>
    </div>


    </body>

    </html>
@endsection
