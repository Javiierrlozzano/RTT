@extends('layouts.app')

@section('template_title')
    Tarifa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tarifa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tarifas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Horario1</th>
										<th>Valorminimo</th>
										<th>Valorkilometro</th>
										<th>Ruta</th>
										<th>Latitud</th>
										<th>Longitud</th>
										<th>Radioproximacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tarifas as $tarifa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tarifa->Horario1 }}</td>
											<td>{{ $tarifa->ValorMinimo }}</td>
											<td>{{ $tarifa->ValorKilometro }}</td>
											<td>{{ $tarifa->Ruta }}</td>
											<td>{{ $tarifa->Latitud }}</td>
											<td>{{ $tarifa->Longitud }}</td>
											<td>{{ $tarifa->RadioProximacion }}</td>

                                            <td>
                                                <form action="{{ route('tarifas.destroy',$tarifa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tarifas.show',$tarifa->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tarifas.edit',$tarifa->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $tarifas->links() !!}
            </div>
        </div>
    </div>
@endsection
