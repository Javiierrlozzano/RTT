@extends('layouts.app')

@section('template_title')
    Movil
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Movil') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('movils.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Placa</th>
										<th>Estado</th>
										<th>Modelo</th>
										<th>Sn</th>
										<th>Color</th>
										<th>Marca</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($movils as $movil)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $movil->Placa }}</td>
											<td>{{ $movil->Estado }}</td>
											<td>{{ $movil->Modelo }}</td>
											<td>{{ $movil->Sn }}</td>
											<td>{{ $movil->Color }}</td>
											<td>{{ $movil->Marca }}</td>

                                            <td>
                                                <form action="{{ route('movils.destroy',$movil->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('movils.show',$movil->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('movils.edit',$movil->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $movils->links() !!}
            </div>
        </div>
    </div>
@endsection
