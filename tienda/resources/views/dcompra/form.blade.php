<div class="box box-info padding-1">
    <div class="box-body">
        
       
        <div class="form-group">
            {{ Form::label('ropa') }}
            {{ Form::select('ropas_id', $ropas,$dcompra->ropas_id, ['class' => 'form-control' . ($errors->has('ropas_id') ? ' no es valido' : ''), 'placeholder' => 'Ropa']) }}
            {!! $errors->first('ropas_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('compra') }}
            {{ Form::select('compras_id',$compras, $dcompra->compras_id, ['class' => 'form-control' . ($errors->has('compras_id') ? ' no es valido' : ''), 'placeholder' => 'Compra']) }}
            {!! $errors->first('compras_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $dcompra->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' no es valido' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>