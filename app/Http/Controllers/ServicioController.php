<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Tecnico;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ServicioController extends Controller
{

    public function index()
    {
        $servicio = Servicio::orderBy('Cod_Servicio', 'DESC')->paginate(0);

        return view('servicio.index', compact('servicio'));
    }



    public function create()
    {
        //Consulta de personas
        $tecnicos = Tecnico::orderBy('Cod_Tecnico', 'DESC')
            ->select('Cod_Tecnico', 'Nombres', 'Apellidos')
            ->get();

        return view('servicio.create',['tecnicos' => $tecnicos]);
    }

    public function store(Request $request)
    {
        $servicios = new Servicio;
        $servicios->Fecha = now()->toDateString();
        $servicios->Cod_Equipo = $request->get('Cod_Equipo');
        $servicios->Cod_Tecnico = $request->get('Cod_Tecnico');
        $servicios->Estado = $request->get('Estado');
        $servicios->Clasificacion = $request->get('Clasificacion');
        $servicios->Categoria = $request->get('Categoria');
        $servicios->Detalle_Servicio = $request->get('Detalle_Servicio');
        $servicios->Observaciones = $request->get('Observaciones');
        $servicios->save();
        return Redirect::to('servicio');
    }

    public function show($id)
    {
        //
    }


    public function edit($Cod_Servicio)
    {
        $servicio = Servicio::findOrFail($Cod_Servicio);
        return view("servicio.edit", ["servicio" => $servicio]);
    }

    public function update(Request $request, $Cod_Servicio)
    {
        $servicios = Servicio::findOrFail($Cod_Servicio);
        $servicios->Fecha = $request->get('Fecha');
        $servicios->Cod_Equipo = $request->get('Cod_Equipo');
        $servicios->Cod_Tecnico = $request->get('Cod_Tecnico');
        $servicios->Estado = $request->get('Estado');
        $servicios->Clasificacion = $request->get('Clasificacion');
        $servicios->Categoria = $request->get('Categoria');
        $servicios->Detalle_Servicio = $request->get('Detalle_Servicio');
        $servicios->Observaciones = $request->get('Observaciones');
        $servicios->update();
        return Redirect::to('servicio');
    }

    public function destroy($Cod_Servicio)
    {
        $servicios = Servicio::findOrFail($Cod_Servicio);
        $servicios->delete();
        return Redirect::to('servicio');
    }
}
