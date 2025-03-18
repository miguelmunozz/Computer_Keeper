@extends('layouts.plantilla')

@section('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h4>Editar técnico</h4>
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
{{ Form::open(array('action' => array('App\Http\Controllers\TecnicoController@update', $tecnico->Cod_Tecnico), 'method' => 'patch')) }}
{{ Form::token() }}
<div class="row">
    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="Nombres">Nombres</label>
            <input type="text" name="Nombres" id="Nombres" class="form-control" value="{{ $tecnico->Nombres }}" placeholder="Digite el nombre">
        </div>
    </div>
    <!-- Otros campos de entrada de datos con valores iniciales -->

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="role_id">Rol</label>
            <select name="role_id" id="role_id" class="form-control">
                <option value="1" {{ $tecnico->role_id == 1 ? 'selected' : '' }}>Administrador</option>
                <option value="2" {{ $tecnico->role_id == 2 ? 'selected' : '' }}>Coordinador de TI</option>
                <option value="3" {{ $tecnico->role_id == 3 ? 'selected' : '' }}>Técnico</option>
            </select>
        </div>
    </div>
    

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="email">Correo</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ $tecnico->email }}" placeholder="Digite correo">
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="col-lg-4 col-md-9 col-sm-6 col-xs-12">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
        <div class="form-group">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
    </div>

    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
        <div class="form-group"> <br>
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> Guardar cambios</button>
            <a class="btn btn-info" href="{{ url('tecnico') }}"><span class="glyphicon glyphicon-home"></span> Regresar </a>
        </div>
    </div>
</div>
{!! Form::close() !!}
@endsection
