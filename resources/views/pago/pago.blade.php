@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Opción de Pago con Tarjeta</h1>

    <form action="{{route('procesar_pago')}}" method="GET">
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
        <button type="submit" class="btn btn-primary">Pagar</button>
    </form>
</div>

@endsection
