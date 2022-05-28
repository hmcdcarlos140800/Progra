@extends('layouts.app')

@section('template_title')
    Ropa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ropa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ropas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
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
                                        
										<th>Categorias</th>
										<th>Marca</th>
										<th>Descripcion</th>
										<th>Precio</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ropas as $ropa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ropa->categoria->nombre }}</td>
											<td>{{ $ropa->marca }}</td>
											<td>{{ $ropa->descripcion }}</td>
											<td>{{ $ropa->precio }}</td>

                                            <td>
                                                <form action="{{ route('ropas.destroy',$ropa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ropas.show',$ropa->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ropas.edit',$ropa->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ropas->links() !!}
            </div>
        </div>
    </div>
@endsection
