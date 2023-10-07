@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? "{{ __('Show') Vehiculo" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Vehiculo</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $vehiculo->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $vehiculo->color }}
                        </div>
                        <div class="form-group">
                            <strong>Tarjeta Circulacion:</strong>
                            {{ $vehiculo->tarjeta_circulacion }}
                        </div>
                        <div class="form-group">
                            <strong>Propietario:</strong>
                            {{ $vehiculo->propietario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
