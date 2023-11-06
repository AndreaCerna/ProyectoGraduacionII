@extends('layouts.app')

@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="container text-center">
        <h1>Pago con Tarjeta</h1>
    </div>

    <div class="container align-content-center mt-5">
        <form action="{{ route('procesar_pago') }}" method="POST">
            @csrf <!-- Agrega el campo CSRF para la protección contra ataques CSRF -->

            <input type="hidden" name="multa_id" value="{{ $multa->id }}">
            <div class="form-group">
                <label for="nombre">Nombre en la Tarjeta:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="numero_tarjeta">Número de Tarjeta:</label>
                <input type="text" class="form-control" id="numero_tarjeta" name="numero_tarjeta" required>
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                <input type="text" class="form-control" id="fecha_vencimiento" name="fecha_vencimiento" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV:</label>
                <input type="text" class="form-control" id="cvv" name="cvv" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Pagar</button>
                <a class="btn btn-warning ml-2" href="{{ route('welcome') }}">{{ __('Cancelar') }}</a>
            </div>
        </form>
    </div>
@endsection
