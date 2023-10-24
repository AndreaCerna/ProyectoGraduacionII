@extends('layouts.app')

@section('template_title')
    Vehiculo
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <h3>Buscar Personas</h3>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-warning" href="#"> {{ __('Regresar') }}</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="GET" action="{{ route('resultadoss') }}">

                            <div class="form-row">
                                <div class="col-md-7 mb-4">
                                    <label for="dpi">Ingrese No. DPI </label>
                                    <input type="text" class="form-control" name="dpi" id="dpi" placeholder="1234567890">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary offset-3">
                                <i class="fas fa-plus"> Buscar</i>
                            </button>
                        </form>

                        @if(isset($personas))
                            <div class="container mt-4">
                                @if($personas->count() > 0)
                                    <h4>Resultados de la búsqueda:</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Nombre </th>
                                            <th>Licencia </th>
                                            <th>Direccion </th>

                                            <!-- Agrega más columnas según tus necesidades -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($personas as $persona)
                                            <tr>
                                                <td>{{ $persona->nombre }}</td>
                                                <td>{{ $persona->licencia }}</td>
                                                <td>{{ $persona->direccion }}</td>
                                                <!-- Agrega más columnas según tus necesidades -->
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    @if($multas->count() > 0)
                                        <h4>Multas Asociadas:</h4>
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Serie</th>
                                                <th>Lugar</th>
                                                <th>Fecha</th>
                                                <th>Articulo</th>
                                                <th>Monto de la Multa</th>
                                                <!-- Agrega más columnas según tus necesidades -->
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($multas as $multa)
                                                <tr>
                                                    <td>{{ $multa->serie }}</td>
                                                    <td>{{ $multa->lugar }}</td>
                                                    <td>{{ $multa->fecha }}</td>
                                                    <td>{{ $multa->articulo }}</td>
                                                    <td>{{ $multa->monto_multa }}</td>

                                                    <!-- Agrega más detalles de la multa según tus necesidades -->
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <p>No se encontraron multas asociadas a este vehículo.</p>
                                    @endif
                                @else
                                    <p>No se encontraron resultados para la búsqueda.</p>
                                @endif
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>

@endsection
