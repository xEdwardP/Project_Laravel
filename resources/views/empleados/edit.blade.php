@extends('adminlte::page')

@section('title', 'Actualizar datos del Empleado ' . $empleado->nombre)

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <small class="bg-info px-2 py-1 rounded h5"><strong>Actualizacion de Datos</strong></small>
                </div>
                <div class="card-body">
                    <form action="{{route('empleados.update', $empleado->codigo)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>CODIGO</strong></small></label>
                                <input type="text" name="codigo" class="form-control form-control-sm" value="{{$empleado->codigo}}" readonly>
                            </div>

                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>RTN</strong></small></label>
                                <input type="text" name="rtn" class="form-control form-control-sm" value="{{$empleado->rtn}}" required maxlength="14">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="" class="my-0"><small><strong>NOMBRE</strong></small></label>
                                <input type="text" name="nombrec" class="form-control form-control-sm" value="{{$empleado->nombre}}" required maxlength="150">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for="" class="my-0"><small><strong>DIRECCION</strong></small></label>
                                <textarea name="direccion" class="form-control form-control-sm" required maxlength="255">{{$empleado->direccion}}</textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>TELEFONO</strong></small></label>
                                <input type="text" name="telefono" class="form-control form-control-sm" value="{{$empleado->telefono}}" maxlength="30">
                            </div>
                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>GENERO</strong></small></label>
                                <select name="genero" class="form-control form-control-sm" required>
                                    <option value="">SELECCIONE GENERO</option>
                                    <option value="Masculino" {{$empleado->genero == "Masculino" ? 'selected' : '' }}>Masculino</option>
                                    <option value="Femenino" {{$empleado->genero == "Femenino" ? 'selected' : '' }}>Femenino</option>
                                </select>
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for="" class="my-0"><small><strong>CORREO ELECTRONICO</strong></small></label>
                                <input type="email" name="correo" class="form-control form-control-sm" value="{{$empleado->correo}}" required maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-3 mt-2">
                                <label for="" class="my-0"><small><strong>ESTADO</strong></small></label>
                                <select name="estado" class="form-control form-control-sm" required>
                                    <option value="">SELECCIONE ESTADO</option>
                                    <option value="ACTIVO" {{$empleado->estado == "ACTIVO" ? 'selected': '' }}>ACTIVO</option>
                                    <option value="INACTIVO" {{$empleado->estado == "INACTIVO" ? 'selected': '' }}>INACTIVO</option>
                                    <option value="SUSPENDIDO" {{$empleado->estado == "SUSPENDIDO" ? 'selected': '' }}>SUSPENDIDO</option>
                                    <option value="CANCELADO" {{$empleado->estado == "CANCELADO" ? 'selected': '' }}>CANCELADO</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 my-3 mt-3">
                                <hr>
                                <button type="submit" class="btn btn-success btn-sm">Guardar</button>
                                <a href="{{ route('empleados.index') }}" class="btn btn-danger btn-sm">Cancelar</a>
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