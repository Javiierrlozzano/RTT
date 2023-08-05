<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Movil_id') }}
            {{ Form::text('Movil_id', $servicio->Movil_id, ['class' => 'form-control' . ($errors->has('Movil_id') ? ' is-invalid' : ''), 'placeholder' => 'Movil Id']) }}
            {!! $errors->first('Movil_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('User_id') }}
            {{ Form::text('User_id', $servicio->User_id, ['class' => 'form-control' . ($errors->has('User_id') ? ' is-invalid' : ''), 'placeholder' => 'User Id']) }}
            {!! $errors->first('User_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario1') }}
            {{ Form::text('Horario1', $servicio->Horario1, ['class' => 'form-control' . ($errors->has('Horario1') ? ' is-invalid' : ''), 'placeholder' => 'Horario1']) }}
            {!! $errors->first('Horario1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horario2') }}
            {{ Form::text('Horario2', $servicio->Horario2, ['class' => 'form-control' . ($errors->has('Horario2') ? ' is-invalid' : ''), 'placeholder' => 'Horario2']) }}
            {!! $errors->first('Horario2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Latitud') }}
            {{ Form::text('Latitud', $servicio->Latitud, ['class' => 'form-control' . ($errors->has('Latitud') ? ' is-invalid' : ''), 'placeholder' => 'Latitud']) }}
            {!! $errors->first('Latitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Longitud') }}
            {{ Form::text('Longitud', $servicio->Longitud, ['class' => 'form-control' . ($errors->has('Longitud') ? ' is-invalid' : ''), 'placeholder' => 'Longitud']) }}
            {!! $errors->first('Longitud', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('Estado', $servicio->Estado, ['class' => 'form-control' . ($errors->has('Estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('Estado', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>