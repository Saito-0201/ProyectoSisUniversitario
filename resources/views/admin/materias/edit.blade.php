@extends('adminlte::page')

@section('content_header')
    <h1><b>Editar materia</b></h1>
    <hr>
@stop

@section('content')

    <!-- centramos el formulario en la pantalla-->
    <div class="row">
        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Editar materia</h3>
                    <!-- /.card-tools -->
                </div>
                <!-- Formulario de edicion-->
                <div class="card-body">
                    <form action="{{url('/admin/materias',$materia->id)}}" method="post">
                        @csrf
                        @method('PUT')

                        <!-- Campo nombre de la carrera select-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de la carrera</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-graduation-cap"></i></span>
                                        </div>
                                        <select class="form-control" name="carrera_id" required>
                                            <option value="">Seleccione una carrera...</option>
                                            @foreach ($carreras as $carrera)
                                            <option value="{{ $carrera->id}}" 
                                                {{ old('carrera_id', $materia->carrera_id) == $carrera->id ? 'selected' : '' }}>
                                                {{ $carrera->nombre}}
                                            </option>
                                            @endforeach
                                        </select>

                                        </div>
                                    @error('carrera_id')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Campo nombre de la Materia-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Nombre de la materia</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-book-open"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="nombre" value="{{ old('nombre', $materia->nombre) }}" placeholder="Ej: Matemáticas Discretas" required>
                                    </div>
                                    @error('nombre')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <!-- Campo codigo de la materia-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="codigo">Código de la materia</label><b> (*)</b>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-hashtag"></i></span>
                                        </div>
                                        <input type="text" class="form-control" name="codigo" value="{{ old('codigo', $materia->codigo) }}" placeholder="Ej: MAT-205" required>
                                    </div>
                                    @error('codigo')
                                    <small style="color: red">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Actualizar Materia</button>
                                    <a href="{{url('/admin/materias')}}" class="btn btn-secondary">Cancelar</a>
                                    
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop

@section('css')

@stop

@section('js')

@stop
