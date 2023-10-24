@extends('layouts.app')

@section('template_title')
    Elemento
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Elemento') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('elementos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar Elemento') }}
                                </a>
                              </div>

                                <div class="float-right">
                                    <a href="{{ route('home') }}" class="btn btn-warning btn-sm float-right"  data-placement="left">
                                        {{ __('Regresar al Menú') }}
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

										<th>Nombre Elemento</th>
										<th>Cargo </th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($elementos as $elemento)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $elemento->nombre_elemento }}</td>
											<td>{{ $elemento->cargo->nombre_cargo}}</td>

                                            <td>
                                                <form action="{{ route('elementos.destroy',$elemento->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('elementos.show',$elemento->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Ver') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('elementos.edit',$elemento->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $elementos->links() !!}
            </div>
        </div>
    </div>
@endsection
