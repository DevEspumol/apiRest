<?php

namespace App\Http\Controllers;
use App\Models\Asistencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AsistenciaController extends Controller
{
    public function setAsistenciaEstudiante(Request $request){
        $datos=$request->validate([
            'IdEstudiante'=>'required',
            'IdMateria'=>'required',
            'Asistio'=>'required'
        ]);
        $InsercionDatos=Asistencia::create($datos);
        return response()->json([
            'message'=>'Success'
        ], 200);
    }

    public function getHistorialAsistenciasByDate(Request $request){
        $request->validate([
            'fechaInicio'=>'required',
            'fechaFin'=>'required',
            'grado'=>'required'
        ]);
        $fechaInicio=$request->input('fechaInicio');
        $fechafin=$request->input('fechaFin');


        $historial=DB::select("select * from historialasistencias
            where date(created_at)>=:FechaInicio and Date(created_at)<=:FechaFin
            and grado=:Grado",
            ['FechaInicio'=>$request->fechaInicio,
            'FechaFin'=>$request->fechaFin,
            'Grado'=>$request->grado,
            ]
            );
        return response()->json($historial, 200);
    }

    public function getAllAsistencia(){



            $historial=DB::select("select * from historialasistencias
               " );
            return response()->json($historial, 200);

    }

    public function getFallasEstudiantes(){
        $historial=DB::select("select * from fallasestudiantes
        " );
     return response()->json($historial, 200);
    }

    public function getCantidadFallasEstudiantes(){
        $historial=DB::select("select * from cantidadfallasestudiantes
        " );
        return response()->json($historial, 200);
    }
}
