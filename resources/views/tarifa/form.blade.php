<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Horario1') }}
            {{ Form::text('Horario1', $tarifa->Horario1, ['class' => 'form-control' . ($errors->has('Horario1') ? ' is-invalid' : ''), 'placeholder' => 'Horario1']) }}
            {!! $errors->first('Horario1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorMinimo') }}
            {{ Form::text('ValorMinimo', $tarifa->ValorMinimo, ['class' => 'form-control' . ($errors->has('ValorMinimo') ? ' is-invalid' : ''), 'placeholder' => 'Valorminimo']) }}
            {!! $errors->first('ValorMinimo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ValorKilometro') }}
            {{ Form::text('ValorKilometro', $tarifa->ValorKilometro, ['class' => 'form-control' . ($errors->has('ValorKilometro') ? ' is-invalid' : ''), 'placeholder' => 'Valorkilometro']) }}
            {!! $errors->first('ValorKilometro', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ruta') }}
            {{ Form::text('Ruta', $tarifa->Ruta, ['class' => 'form-control' . ($errors->has('Ruta') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
            {!! $errors->first('Ruta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Latitud') }}
            {{ Form::text('Latitud', $tarifa->Latitud, ['class' => 'form-control' . ($errors->has('Latitud') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('Latitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Longitud') }}
            {{ Form::text('Longitud', $tarifa->Longitud, ['class' => 'form-control' . ($errors->has('Longitud') ? ' is-invalid' : ''), 'placeholder' => 'Longitud']) }}
            {!! $errors->first('Longitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('RadioProximacion') }}
            {{ Form::text('RadioProximacion', $tarifa->RadioProximacion, ['class' => 'form-control' . ($errors->has('RadioProximacion') ? ' is-invalid' : ''), 'placeholder' => 'Radioproximacion']) }}
            {!! $errors->first('RadioProximacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>