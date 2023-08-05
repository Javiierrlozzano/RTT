@extends('layouts.app')

@section('template_title')
    {{ $servicio->name ?? "{{ __('Show') Servicio" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Servicio</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('servicios.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Movil Id:</strong>
                            {{ $servicio->Movil_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $servicio->User_id }}
                        </div>
                        <div class="form-group">
                            <strong>Horario1:</strong>
                            {{ $servicio->Horario1 }}
                        </div>
                        <div class="form-group">
                            <strong>Horario2:</strong>
                            {{ $servicio->Horario2 }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $servicio->Latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $servicio->Longitud }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $servicio->Estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
