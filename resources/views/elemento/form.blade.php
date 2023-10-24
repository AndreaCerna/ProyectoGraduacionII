<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre_elemento') }}
            {{ Form::text('nombre_elemento', $elemento->nombre_elemento, ['class' => 'form-control' . ($errors->has('nombre_elemento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Elemento']) }}
            {!! $errors->first('nombre_elemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargos_id') }}
            {{ Form::select('cargos_id', $cargo,$elemento->cargos_id, ['class' => 'form-control' . ($errors->has('cargos_id') ? ' is-invalid' : ''), 'placeholder' => 'Cargos Id']) }}
            {!! $errors->first('cargos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
