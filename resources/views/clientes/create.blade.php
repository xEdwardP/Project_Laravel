@extends('template')

@section('title', 'Registrar Nuevo Cliente')

@section('content')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="card">
                <div class="card-header">
                    <small class="bg-info px-2 py-1 rounded text-light"><strong>Registrar Nuevo Cliente</strong></small>
                </div>

                <div class="card-body">
                    <form action="{{route('clientes.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for=""><small><strong>Nombre o Razon Social</strong></small></label>
                                <input type="text" name="nombre" class="form-control form-control-sm" required
                                    maxlength="255">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-2">
                                <label for=""><small><strong>Direccion</strong></small></label>
                                <textarea name="direccion" class="form-control form-control-sm" required maxlength="255"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 col-md-2 mt-2">
                                <label for=""><small><strong>Telefono</strong></small></label>
                                <input type="text" name="telefono" class="form-control form-control-sm" maxlength="10">
                            </div>

                            <div class="col-6 col-md-2 mt-2">
                                <label for=""><small><strong>Genero</strong></small></label>
                                <select name="genero" class="form-control form-control-sm" required>
                                    <option value="">Seleccionar Genero</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="femenino">Femenino</option>
                                </select>
                            </div>

                            <div class="col-6 col-md-2 mt-2">
                                <label for=""><small><strong>Fecha de Nacimiento</strong></small></label>
                                <input type="date" name="fecha_nac" class="form-control form-control-sm" required>
                            </div>

                            <div class="col-12 col-md-6 mt-2">
                                <label for=""><small><strong>Correo Electronico</strong></small></label>
                                <input type="email" name="correo" class="form-control form-control-sm" maxlength="200">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 my-3 mt-3">
                                <hr>
                                <button type="submit" class="btn btn-success btn-sm">Registrar</button>
                                <a href="{{route('clientes.index')}}" class="btn btn-danger btn-sm">Cancelar</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
