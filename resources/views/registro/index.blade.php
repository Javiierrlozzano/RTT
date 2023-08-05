@extends('layouts.app')

@section('template_title')
    Registro
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Registro') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('registros.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tarifa Id</th>
										<th>Servicios Id</th>
										<th>User Id</th>
										<th>Latitudd</th>
										<th>Longitudd</th>
										<th>Latitudo</th>
										<th>Longitudo</th>
										<th>Estado</th>
										<th>Valortotal</th>
										<th>Tipopago</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registros as $registro)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $registro->Tarifa_Id }}</td>
											<td>{{ $registro->Servicios_id }}</td>
											<td>{{ $registro->User_id }}</td>
											<td>{{ $registro->LatitudD }}</td>
											<td>{{ $registro->LongitudD }}</td>
											<td>{{ $registro->LatitudO }}</td>
											<td>{{ $registro->LongitudO }}</td>
											<td>{{ $registro->Estado }}</td>
											<td>{{ $registro->ValorTotal }}</td>
											<td>{{ $registro->TipoPago }}</td>

                                            <td>
                                                <form action="{{ route('registros.destroy',$registro->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('registros.show',$registro->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('registros.edit',$registro->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $registros->links() !!}
            </div>
        </div>
    </div>
@endsection
