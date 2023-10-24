@extends('layouts.app')

@section('template_title')
    {{ $elemento->name ?? "{{ __('Show') Elemento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Elemento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('elementos.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Nombre Elemento:</strong>
                            {{ $elemento->nombre_elemento }}
                        </div>
                        <div class="form-group">
                            <strong>Cargos Id:</strong>
                            {{ $elemento->cargo->nombre_cargo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
