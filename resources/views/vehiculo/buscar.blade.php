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
                            <h3>Buscar Vehiculo</h3>
                        </div>
                    </div>

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <form method="GET" action="{{ route('resultados') }}">

                            <div class="form-row">
                                <div class="col-md-7 mb-4">
                                    <label for="tipo_placa">Tipo de Placa</label>
                                    <select class="form-control" name="tipo_placa" id="tipo_placa">
                                        <option value="">Selecciona un tipo de placa</option>
                                        @foreach ($tiposPlacas as $tipoPlaca)
                                            <option value="{{ $tipoPlaca->id }}">{{ $tipoPlaca->tipo }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-7 mb-4">
                                    <label for="numero_placa">Placa</label>
                                    <input type="text" class="form-control" name="numero_placa" id="numero_placa" placeholder="Número de placa">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary offset-3">
                                <i class="fas fa-plus"> Buscar</i>
                            </button>
                        </form>

                        @if(isset($vehiculos))
                            <div class="container mt-4">
                                @if($vehiculos->count() > 0)
                                    <h4>Resultados de la búsqueda:</h4>
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tipo de placa</th>
                                            <th>numero de placa</th>
                                            <th>Marca</th>
                                            <th>Color</th>
                                            <th>Tarjeta de Cirulacion</th>
                                            <th>Propietario</th>
                                            <!-- Agrega más columnas según tus necesidades -->
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($vehiculos as $vehiculo)
                                            <tr>
                                                <td>{{ $vehiculo->id }}</td>
                                                <td>{{ $vehiculo->TipoPlaca->tipo }}</td>
                                                <td>{{ $vehiculo->placa }}</td>
                                                <td>{{ $vehiculo->marca }}</td>
                                                <td>{{ $vehiculo->color }}</td>
                                                <td>{{ $vehiculo->tarjeta_circulacion }}</td>
                                                <td>{{ $vehiculo->propietario }}</td>
                                                <td>{{ $vehiculo->vehiculos_id }}</td>
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
                                        <a href="{{ url('/pago') }} " type="submit" role="button" class="btn btn-success offset-3">
                                            <i class="fas fa-plus"> Pagar</i>
                                        </a>
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
