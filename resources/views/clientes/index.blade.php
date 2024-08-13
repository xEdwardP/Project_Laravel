@extends('template')

@section('title', 'Listado de Clientes')

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <span class="bg-info rounded px-2 py-1 text-light">
                        <strong>Listado de Clientes</strong>
                    </span>

                    <div class="row">
                        <div class="col-12 text-end border-bottom pb-1">
                            <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm">
                                <span>Nuevo Cliente</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-sm table-bordered">
                                <thead class="text-center table-dark">
                                    <tr>
                                        <th><small><strong>ID</strong></small></th>
                                        <th><small><strong>NOMBRE O RAZON SOCIAL</strong></small></th>
                                        <th><small><strong>TELEFONO</strong></small></th>
                                        <th><small><strong>CORREO</strong></small></th>
                                        <th><small><strong>ACCIONES</strong></small></th>
                                    </tr>
                                </thead>

                                <tbody class="text-center">
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td><small><strong>{{ $cliente->id }}</strong></small></td>
                                            <td><small>{{ $cliente->nombre_o_razon }}</small></td>
                                            <td><small>{{ $cliente->telefono }}</small></td>
                                            <td><small>{{ $cliente->correo }}</small></td>
                                            <td>
                                                <a href="" class="btn btn-outline-warning btn-sm">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                    <span>Editar</span>
                                                </a>
                                                <a href="" class="btn btn-outline-danger btn-sm">
                                                    <i class="fa-solid fa-user-minus"></i>
                                                    <span>Eliminar</span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
