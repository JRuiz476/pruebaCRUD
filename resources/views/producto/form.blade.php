<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Código del Producto') }}
            {{ Form::text('cod_product', $producto->cod_product, ['class' => 'form-control' . ($errors->has('cod_product') ? ' is-invalid' : ''), 'placeholder' => 'Código del Producto']) }}
            {!! $errors->first('cod_product', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre del Producto') }}
            {{ Form::text('nameProd', $producto->nameProd, ['class' => 'form-control' . ($errors->has('nameProd') ? ' is-invalid' : ''), 'placeholder' => 'Nombre del Producto']) }}
            {!! $errors->first('nameProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripción del Producto') }}
            {{ Form::text('descProd', $producto->descProd, ['class' => 'form-control' . ($errors->has('descProd') ? ' is-invalid' : ''), 'placeholder' => 'Descripción del Producto']) }}
            {!! $errors->first('descProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo del Producto') }}
            {{ Form::text('typeProd', $producto->typeProd, ['class' => 'form-control' . ($errors->has('typeProd') ? ' is-invalid' : ''), 'placeholder' => 'Tipo de Producto']) }}
            {!! $errors->first('typeProd', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Costo Unitario') }}
            {{ Form::text('costUnit', $producto->costUnit, ['class' => 'form-control' . ($errors->has('costUnit') ? ' is-invalid' : ''), 'placeholder' => 'Costo Unitario']) }}
            {!! $errors->first('costUnit', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Cantidad Existente') }}
            {{ Form::text('cantExist', $producto->cantExist, ['class' => 'form-control' . ($errors->has('cantExist') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad Existente']) }}
            {!! $errors->first('cantExist', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>