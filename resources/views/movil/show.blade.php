@extends('layouts.app')

@section('template_title')
    {{ $movil->name ?? "{{ __('Show') Movil" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Movil</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('movils.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $movil->Placa }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $movil->Estado }}
                        </div>
                        <div class="form-group">
                            <strong>Modelo:</strong>
                            {{ $movil->Modelo }}
                        </div>
                        <div class="form-group">
                            <strong>Sn:</strong>
                            {{ $movil->Sn }}
                        </div>
                        <div class="form-group">
                            <strong>Color:</strong>
                            {{ $movil->Color }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $movil->Marca }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
