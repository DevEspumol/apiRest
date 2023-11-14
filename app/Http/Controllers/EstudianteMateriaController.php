<?php

namespace App\Http\Controllers;
use App\Models\EstudianteMateria;
use Illuminate\Http\Request;

class EstudianteMateriaController extends Controller
{
    public function getEstudiantesByIdMateria(Request $request){
        $request->validate(['
        IdMateria']);
        //$estudiantes = MateriaEstudiante::where('id_materia', $idMateria)->get();

        //return response()->json($estudiantes);
        $Estudiantes=EstudianteMateria::where('IdMateria',$request->id)->get();

    }

    public function validateEstudiantesByIdMateria(Request $request){
        return $request->validate([
            'Id'=>'required'
        ]);
    }

    public function matricularEstudiante(Request $request){
        $datos=$request->validate([
            'IdEstudiante'=>'required',
            'IdMateria'=>'required',
            'IdDocente'=>'required'
        ]);
        $data=EstudianteMateria::create($datos);
        return response()->json([
            'message'=>'success'
        ], 200 );

    }
}
