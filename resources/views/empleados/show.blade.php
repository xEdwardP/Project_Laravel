@extends('adminlte::page')

@section('title', 'Eliminar Empleado - ' . $empleado->nombre)

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <small class="bg-danger px-2 py-1 rounded-pill"><strong>Confirmar - Elimacion de Empleado</strong></small>
                </div>

                <div class="card-body">
                    <form action="{{route('empleados.destroy', $empleado->codigo)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="row">
                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>CODIGO</strong></small></label>
                                <input type="text" name="codigo" class="form-control form-control-sm" value="{{$empleado->codigo}}" readonly>
                            </div>

                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>RTN</strong></small></label>
                                <input type="text" name="rtn" class="form-control form-control-sm" value="{{$empleado->rtn}}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="" class="my-0"><small><strong>NOMBRE</strong></small></label>
                                <input type="text" name="nombrec" class="form-control form-control-sm" value="{{$empleado->nombre}}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="" class="my-0"><small><strong>DIRECCION</strong></small></label>
                                <textarea name="direccion" class="form-control form-control-sm" readonly>{{$empleado->direccion}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <hr>
                                <small class="text-danger"><strong>Los datos del empleado se eliminaran de forma permanente!</strong></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <hr>
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                <a href="{{ route('empleados.index') }}" class="btn btn-warning btn-sm">Cancelar</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')
@stop