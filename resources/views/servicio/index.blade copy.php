@extends('layouts.plantilla')
@section('contenido')
    <div class="row">
        <div class="col-md-9">
            <a href="{{ url('servicio/create') }}" class="pull-right">
                <button class="btn btn-success">Crear Servicio</button> </a>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <th>Número de servicio</th>
                    <th>Fecha</th>
                    <th>Cod Equipo</th>
                    <th>Cod Tecnico</th>
                    <th>Estado</th>
                    <th>Clasificacion</th>
                    <th>Categoria</th>
                    <th>Detalle Servicio</th>
                    <th>Observaciones</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach ($servicio as $ser)
                        <tr>
                            <td>{{ $ser->Cod_Servicio }}</td>
                            <td>{{ $ser->Fecha }}</td>
                            <td>{{ $ser->Cod_Equipo }}</td>
                            <td>{{ $ser->Cod_Tecnico }}</td>
                            <td>{{ $ser->Estado }}</td>
                            <td>{{ $ser->Clasificacion }}</td>
                            <td>{{ $ser->Categoria }}</td>
                            <td>{{ $ser->Detalle_Servicio }}</td>
                            <td>{{ $ser->Observaciones }}</td>
                            <td>
                                <a
                                    href="{{ URL::action('App\Http\Controllers\ServicioController@edit', $ser->Cod_Servicio) }}"><button
                                        class="btn btn-primary">Actualizar</button></a>
                                <a href="" data-bs-toggle="modal"
                                    data-bs-target="#modal-delete-servicio{{ $ser->Cod_Servicio }}">
                                    <button type="button" class="btn btn-danger"> Eliminar</button>
                                </a>
                            </td>
                        </tr>
                        @include('servicio.modal')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
