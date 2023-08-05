@extends('layouts.app')

@section('template_title')
    {{ $tarifa->name ?? "{{ __('Show') Tarifa" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Tarifa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tarifas.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Horario1:</strong>
                            {{ $tarifa->Horario1 }}
                        </div>
                        <div class="form-group">
                            <strong>Valorminimo:</strong>
                            {{ $tarifa->ValorMinimo }}
                        </div>
                        <div class="form-group">
                            <strong>Valorkilometro:</strong>
                            {{ $tarifa->ValorKilometro }}
                        </div>
                        <div class="form-group">
                            <strong>Ruta:</strong>
                            {{ $tarifa->Ruta }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $tarifa->Latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $tarifa->Longitud }}
                        </div>
                        <div class="form-group">
                            <strong>Radioproximacion:</strong>
                            {{ $tarifa->RadioProximacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
