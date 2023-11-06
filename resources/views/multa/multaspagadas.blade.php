@extends('layouts.app')

@section('template_title')
    Multa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Multa') }}
                            </span>

                            <div class="float-right">
                                <a href="{{ route('home') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                    {{ __('Regresar al Menú') }}
                                </a>
                            </div>

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Serie</th>
                                    <th>Lugar</th>
                                    <th>Fecha</th>
                                    <th>Articulo</th>
                                    <th>Monto Multa</th>
                                    <th>Conductor</th>
                                    <th>Elemento</th>
                                    <th>Vehiculo</th>
                                    <th>Usuario</th>
                                    <th>Estado</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($multas as $multa)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $multa->serie }}</td>
                                        <td>{{ $multa->lugar }}</td>
                                        <td>{{ $multa->fecha }}</td>
                                        <td>{{ $multa->articulo }}</td>
                                        <td>{{ $multa->monto_multa }}</td>
                                        <td>{{ $multa->persona->nombre }}</td>
                                        <td>{{ $multa->elemento->nombre_elemento}}</td>
                                        <td>{{ $multa->vehiculo->placa }}</td>
                                        <td>{{ $multa->usuario->nombre_usuario }}</td>
                                        <td>{{ $estados[$multa->estados_id] }}</td>
                                        <td>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $multas->links() !!}
            </div>
        </div>
    </div>
@endsection
