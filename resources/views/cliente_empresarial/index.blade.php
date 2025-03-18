@extends('layouts.plantilla')
@section('contenido')
<div class="row">
    <div class="col-md-9">
        <a href="{{ url('cliente_empresarial/create') }}" class="pull-right">
            <button class="btn btn-success">Crear cliente empresarial</button> </a>
    </div>
</div>
<div class="mb-3"></div>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabla de clientes empresariales</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Codigo de cliente</th>
                        <th>Empresa</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Cargo</th>
                        <th>Dirección</th>
                        <th>Teléfono</th>
                        <th># CC</th>
                        <th>Fecha de nacimiento</th>
                        <th>Correo</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cliente_empresarial as $cle)
                        <tr>
                            <td>{{ $cle->Cod_Cliente_Emp }}</td>
                            <td>{{ $cle->empresa ? $cle->empresa->Cod_Empresa . ' ' . $cle->empresa->Nombre : 'Sin empresa asignada' }}</td>
                            <td>{{ $cle->Nombres }}</td>
                            <td>{{ $cle->Apellidos }}</td>
                            <td>{{ $cle->Cargo }}</td>
                            <td>{{ $cle->Direccion }}</td>
                            <td>{{ $cle->Telefono }}</td>
                            <td>{{ $cle->Num_CC }}</td>
                            <td>{{ $cle->Fecha_Nac }}</td>
                            <td>{{ $cle->Correo }}</td>
                            <td>
                                <a href="{{ URL::action('App\Http\Controllers\ClienteEmpresarialController@edit', $cle->Cod_Cliente_Emp) }}"><button class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $cle->Cod_Cliente_Emp }}">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('cliente_empresarial.modal')
                    @endforeach

                    
                </tbody>
            </table>
        </div>
    </div>
@endsection

