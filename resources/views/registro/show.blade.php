@extends('layouts.app')

@section('template_title')
    {{ $registro->name ?? "{{ __('Show') Registro" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Registro</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('registros.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tarifa Id:</strong>
                            {{ $registro->Tarifa_Id }}
                        </div>
                        <div class="form-group">
                            <strong>Servicios Id:</strong>
                            {{ $registro->Servicios_id }}
                        </div>
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $registro->User_id }}
                        </div>
                        <div class="form-group">
                            <strong>Latitudd:</strong>
                            {{ $registro->LatitudD }}
                        </div>
                        <div class="form-group">
                            <strong>Longitudd:</strong>
                            {{ $registro->LongitudD }}
                        </div>
                        <div class="form-group">
                            <strong>Latitudo:</strong>
                            {{ $registro->LatitudO }}
                        </div>
                        <div class="form-group">
                            <strong>Longitudo:</strong>
                            {{ $registro->LongitudO }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $registro->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Valortotal:</strong>
                            {{ $registro->ValorTotal }}
                        </div>
                        <div class="form-group">
                            <strong>Tipopago:</strong>
                            {{ $registro->TipoPago }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
