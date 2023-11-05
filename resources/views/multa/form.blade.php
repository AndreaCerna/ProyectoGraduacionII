<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('serie') }}
            {{ Form::text('serie', $multa->serie, ['class' => 'form-control' . ($errors->has('serie') ? ' is-invalid' : ''), 'placeholder' => 'Serie']) }}
            {!! $errors->first('serie', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lugar') }}
            {{ Form::text('lugar', $multa->lugar, ['class' => 'form-control' . ($errors->has('lugar') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
            {!! $errors->first('lugar', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $multa->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('articulo') }}
            {{ Form::text('articulo', $multa->articulo, ['class' => 'form-control' . ($errors->has('articulo') ? ' is-invalid' : ''), 'placeholder' => 'Articulo']) }}
            {!! $errors->first('articulo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto_multa') }}
            {{ Form::text('monto_multa', $multa->monto_multa, ['class' => 'form-control' . ($errors->has('monto_multa') ? ' is-invalid' : ''), 'placeholder' => 'Monto Multa']) }}
            {!! $errors->first('monto_multa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('personas_id') }}
            {{ Form::select('personas_id', $persona,$multa->personas_id, ['class' => 'form-control' . ($errors->has('personas_id') ? ' is-invalid' : ''), 'placeholder' => 'Conductor']) }}
            {!! $errors->first('personas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('elementos_id') }}
            {{ Form::select('elementos_id', $elemento, $multa->elementos_id, ['class' => 'form-control' . ($errors->has('elementos_id') ? ' is-invalid' : ''), 'placeholder' => 'Elementos Id']) }}
            {!! $errors->first('elementos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vehiculos_id') }}
            {{ Form::select('vehiculos_id', $vehiculo, $multa->vehiculos_id, ['class' => 'form-control' . ($errors->has('vehiculos_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculos Id']) }}
            {!! $errors->first('vehiculos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuarios_id') }}
            {{ Form::select('usuarios_id', $usuario,$multa->usuarios_id, ['class' => 'form-control' . ($errors->has('usuarios_id') ? ' is-invalid' : ''), 'placeholder' => 'Usuarios Id']) }}
            {!! $errors->first('usuarios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-warning" href="{{ route('multas.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>
