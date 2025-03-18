@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar Equipo</h4>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{!! Form::open(array('url' => 'equipo', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
<div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cod_Cliente">Codigo del cliente</label>
            <input type="text" name="Cod_Cliente" id="Cod_Cliente" class="form-control" placeholder="Digite el codigo del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_Equipo">Nombre de Equipo</label>
            <input type="text" name="Nombre_Equipo" id="Nombre_equipo" class="form-control" placeholder="Digite el nombre del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Marca">Marca</label>
            <input type="text" name="Marca" id="Marca" class="form-control" placeholder="Marca del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Modelo">Modelo</label>
            <input type="text" name="Modelo" id="Modelo" class="form-control" placeholder="Modelo del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Serial">Serial</label>
            <input type="text" name="Serial" id="Serial" class="form-control" placeholder="Serial del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombre_SO">Nombre SO</label>
            <input type="text" name="Nombre_SO" id="Nombre_SO" class="form-control" placeholder="Nombre SO">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Procesador">Procesador</label>
            <input type="text" name="Procesador" id="Procesador" class="form-control" placeholder="Procesador del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Memoria_RAM">Memoria Ram</label>
            <input type="text" name="Memoria_RAM" id="Memoria_RAM" class="form-control" placeholder="Memoria RAM del equipo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Sistema">Tipo Sistema</label>
            <select name="Tipo_Sistema" id="Tipo_Sistema" class="form-control">
                <option value="32 bits">32 bits</option>
                <option value="64 bits">64 bits</option>
            </select>
        </div>
    </div>    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Tipo_Equipo">Tipo de equipo</label>
            <select name="Tipo_Equipo" id="Tipo_Equipo" class="form-control">
                <option value="Portátil">Portátil</option>
                <option value="Escritorio">Escritorio</option>
            </select>
        </div>
    </div>    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Observaciones">Observaciones</label>
            <input type="text" name="Observaciones" id="Observaciones" class="form-control" placeholder="Observaciones">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{ url('equipo') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
