@extends('adminlte::page')

@section('title', 'Listado de Empleados')

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right border-bottom pb-1 mt-2">
                            <a href="{{ route('empleados.create') }}" class="btn btn-primary btn-xs">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="d-none d-md-inline">Nuevo Empleado</span>
                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 table-responsive">
                            <table class="table table-sm table-stripped table-bordered">
                                <thead class="text-center table-dark">
                                    <tr>
                                        <th><small><strong>CODIGO</strong></small></th>
                                        <th><small><strong>NOMBRE O RAZON SOCIAL</strong></small></th>
                                        <th><small><strong>TELEFONO</strong></small></th>
                                        <th><small><strong>ACCIONES</strong></small></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($empleados as $empleado)
                                        <tr>
                                            <td><small><strong>{{ $empleado->codigo }}</strong></small></td>
                                            <td><small>{{ $empleado->nombre }}</small></td>
                                            <td><small>{{ $empleado->telefono }}</small></td>
                                            <td>
                                                <a href="{{ route('empleados.edit', $empleado->codigo) }}"
                                                    class="btn btn-outline-warning btn-xs">
                                                    <i class="fa-solid fa-user-pen"></i>
                                                    <span class="d-none d-md-inline">Editar</span>
                                                </a>
                                                <a href="{{route('empleados.show', $empleado->codigo)}}" class="btn btn-outline-danger btn-xs">
                                                    <i class="fa-solid fa-user-minus"></i>
                                                    <span class="d-none d-md-inline">Eliminar</span>
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
@stop

@section('css')
@stop

@section('js')
@stop
