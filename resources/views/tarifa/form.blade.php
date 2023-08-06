<div class="box box-info padding-1">
    <div class="box-body">
        <div class ="row">
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Ruta') }}
                    {{ Form::text('Ruta', $tarifa->Ruta, ['class' => 'form-control' . ($errors->has('Ruta') ? ' is-invalid' : ''), 'placeholder' => 'Ruta']) }}
                    {!! $errors->first('Ruta', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Horario Inicio') }}
                    {{ Form::datetimelocal('Horario1', $tarifa->Horario1, ['class' => 'form-control' . ($errors->has('Horario1') ? ' is-invalid' : ''), 'placeholder' => 'Horario Inicio']) }}
                    {!! $errors->first('Horario1', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    {{ Form::label('Horario Finalizacion') }}
                    {{ Form::datetimelocal('Horario2', $tarifa->Horario2, ['class' => 'form-control' . ($errors->has('Horario2') ? ' is-invalid' : ''), 'placeholder' => 'Horario Finalizacion']) }}
                    {!! $errors->first('Horario2', '<div class="invalid-feedback">:message</div>') !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('Valor de Tarifas') }}
                    <div class="input-group">
                    <span class="input-group-addon">$</span>
                    {{ Form::text('ValorMinimo', $tarifa->ValorMinimo, ['class' => 'form-control' . ($errors->has('ValorMinimo') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
                    {!! $errors->first('ValorMinimo', '<div class="invalid-feedback">:message</div>') !!}
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {{ Form::label('ValorKilometro', 'Valor Por Kilómetro') }}
                    <div class="input-group">
                        <span class="input-group-addon">$</span>
                        {{ Form::text('ValorKilometro', number_format($tarifa->ValorKilometro, 2, '.', ','), ['class' => 'form-control' . ($errors->has('ValorKilometro') ? ' is-invalid' : ''), 'placeholder' => 'Valor por kilómetro']) }}
                    </div>
                    @if ($errors->has('ValorKilometro'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('ValorKilometro') }}</strong>
                        </span>
                    @endif
                </div>
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
        

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>