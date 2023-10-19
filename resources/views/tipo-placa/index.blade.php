@extends('layouts.app')

@section('template_title')
    Tipo Placa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipo Placa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipo-placas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Tipo</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoPlacas as $tipoPlaca)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoPlaca->tipo }}</td>
											<td>{{ $tipoPlaca->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('tipo-placas.destroy',$tipoPlaca->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipo-placas.show',$tipoPlaca->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipo-placas.edit',$tipoPlaca->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $tipoPlacas->links() !!}
            </div>
        </div>
    </div>
@endsection
