@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{ url('empresa/create') }}" class="pull-right">
            <button class="btn btn-success">Crear empresa</button> </a>
    </div>
</div>
<div class="mb-3"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de empresas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo de empresa</th>
                        <th>Nombre</th>
                        <th>Numero de NIT</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Fecha de contrato</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresa as $emp)
                        <tr>
                            <td>{{ $emp->Cod_Empresa }}</td>
                            <td>{{ $emp->Nombre }}</td>
                            <td>{{ $emp->Num_NIT }}</td>
                            <td>{{ $emp->Direccion }}</td>
                            <td>{{ $emp->Telefono }}</td>
                            <td>{{ $emp->Fecha_Contrato }}</td>
                            <td>
                                <a href="{{ URL::action('App\Http\Controllers\EmpresaController@edit', $emp->Cod_Empresa) }}"><button class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $emp->Cod_Empresa }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>

                        @include('empresa.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

