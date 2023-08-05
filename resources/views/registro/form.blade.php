<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tarifa_Id') }}
            {{ Form::text('Tarifa_Id', $registro->Tarifa_Id, ['class' => 'form-control' . ($errors->has('Tarifa_Id') ? ' is-invalid' : ''), 'placeholder' => 'Tarifa Id']) }}
            {!! $errors->first('Tarifa_Id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Servicios_id') }}
            {{ Form::text('Servicios_id', $registro->Servicios_id, ['class' => 'form-control' . ($errors->has('Servicios_id') ? ' is-invalid' : ''), 'placeholder' => 'Servicios Id']) }}
            {!! $errors->first('Servicios_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('User_id') }}
            {{ Form::text('User_id', $registro->User_id, ['class' => 'form-control' . ($errors->has('User_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('User_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LatitudD') }}
            {{ Form::text('LatitudD', $registro->LatitudD, ['class' => 'form-control' . ($errors->has('LatitudD') ? ' is-invalid' : ''), 'placeholder' => 'Latitudd']) }}
            {!! $errors->first('LatitudD', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LongitudD') }}
            {{ Form::text('LongitudD', $registro->LongitudD, ['class' => 'form-control' . ($errors->has('LongitudD') ? ' is-invalid' : ''), 'placeholder' => 'Longitudd']) }}
            {!! $errors->first('LongitudD', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LatitudO') }}
            {{ Form::text('LatitudO', $registro->LatitudO, ['class' => 'form-control' . ($errors->has('LatitudO') ? ' is-invalid' : ''), 'placeholder' => 'Latitudo']) }}
            {!! $errors->first('LatitudO', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('LongitudO') }}
            {{ Form::text('LongitudO', $registro->LongitudO, ['class' => 'form-control' . ($errors->has('LongitudO') ? ' is-invalid' : ''), 'placeholder' => 'Longitudo']) }}
            {!! $errors->first('LongitudO', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $registro->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorTotal') }}
            {{ Form::text('ValorTotal', $registro->ValorTotal, ['class' => 'form-control' . ($errors->has('ValorTotal') ? ' is-invalid' : ''), 'placeholder' => 'Valortotal']) }}
            {!! $errors->first('ValorTotal', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoPago') }}
            {{ Form::text('TipoPago', $registro->TipoPago, ['class' => 'form-control' . ($errors->has('TipoPago') ? ' is-invalid' : ''), 'placeholder' => 'Tipopago']) }}
            {!! $errors->first('TipoPago', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>