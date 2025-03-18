@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Ingresar Empresa</h4>
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
{!! Form::open(array('url' => 'cliente_empresarial', 'method' => 'POST', 'autocomplete' => 'off')) !!}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cod_Empresa">Seleccionar Empresa</label>
            <select name="Cod_Empresa" id="Cod_Empresa" class="form-control">
                <option value="">Seleccionar Empresa</option>
                @foreach ($empresas as $empresa)
                    <option value="{{ $empresa->Cod_Empresa }}">{{ $empresa->Cod_Empresa }} - {{ $empresa->Nombre }}</option>
                @endforeach
            </select>
        </div>
    </div>    
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" name="Nombres" id="Nombres" class="form-control" placeholder="Digite el nombre">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Apellidos">Apellidos</label>
            <input type="text" name="Apellidos" id="Apellidos" class="form-control" placeholder="Digite apellidos">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Cargo">Cargo</label>
            <input type="text" name="Cargo" id="Cargo" class="form-control" placeholder="Digite Cargo">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Direccion">Direccion</label>
            <input type="text" name="Direccion" id="Direccion" class="form-control" placeholder="Digite direccion">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Telefono">Telefono</label>
            <input type="text" name="Telefono" id="Telefono" class="form-control" placeholder="Digite telefono">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Num_CC">Numero de CC</label>
            <input type="text" name="Num_CC" id="Num_CC" class="form-control" placeholder="Digite numero de cc">
        </div>
    </div>
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Fecha_Nac">Fecha de nacimiento</label>
            <input type="date" name="Fecha_Nac" id="Fecha_Nac" class="form-control">
        </div>
    </div>    
       <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Correo">Correo</label>
            <input type="text" name="Correo" id="Correo" class="form-control" placeholder="Digite correo">
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar</button>
            <button class="btn btn-danger" type="reset"><span class="glyphicon glyphicon-remove"></span> Vaciar Campos</button>
            <a class="btn btn-info" type="reset" href="{{ url('cliente_empresarial') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
