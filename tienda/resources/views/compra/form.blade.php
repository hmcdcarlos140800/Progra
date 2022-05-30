<div class="box box-info padding-1">
    <div class="box-body">
        
        
        <div class="form-group">
            {{ Form::label('clientes_id') }}
            {{ Form::select('clientes_id',$clientes, $compra->clientes_id, ['class' => 'form-control' . ($errors->has('clientes_id') ? ' no es valido' : ''), 'placeholder' => 'Clientes Id']) }}
            {!! $errors->first('clientes_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::text('fecha', $compra->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' no es valido' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>