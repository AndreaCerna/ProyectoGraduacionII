@extends('layouts.app')

@section('template_title')
    {{ $multa->name ?? "{{ __('Ver') Multa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Multa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('multas.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Serie:</strong>
                            {{ $multa->serie }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $multa->lugar }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $multa->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Articulo:</strong>
                            {{ $multa->articulo }}
                        </div>
                        <div class="form-group">
                            <strong>Monto Multa:</strong>
                            {{ $multa->monto_multa }}
                        </div>
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $multa->Conductor }}
                        </div>
                        <div class="form-group">
                            <strong>Licencia Conducir:</strong>
                            {{ $multa->licencia_conducir }}
                        </div>
                        <div class="form-group">
                            <strong>Elementos Id:</strong>
                            {{ $multa->elementos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Vehiculos Id:</strong>
                            {{ $multa->vehiculos_id }}
                        </div>
                        <div class="form-group">
                            <strong>Usuarios Id:</strong>
                            {{ $multa->usuarios_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
