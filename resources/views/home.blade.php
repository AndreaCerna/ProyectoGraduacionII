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


    </body>

    </html>
@endsection
