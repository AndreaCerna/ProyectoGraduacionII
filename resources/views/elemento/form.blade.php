<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('nombre_elemento') }}
            {{ Form::text('nombre_elemento', $elemento->nombre_elemento, ['class' => 'form-control' . ($errors->has('nombre_elemento') ? ' is-invalid' : ''), 'placeholder' => 'Nombre Elemento']) }}
            {!! $errors->first('nombre_elemento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargos_id') }}
            {{ Form::select('cargos_id', $cargo, $elemento->cargos_id, ['class' => 'form-control select2' . ($errors->has('cargos_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Cargo']) }}
            {!! $errors->first('cargos_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        </div>
        </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
        <a class="btn btn-warning ml-2" href="{{ route('elementos.index') }}"> {{ __('Cancelar') }}</a>
    </div>
</div>

<!-- Inicializa Select2 -->
<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "Seleccione un Cargo",
            allowClear: true,
            width: '100%'
        });
    });
</script>
