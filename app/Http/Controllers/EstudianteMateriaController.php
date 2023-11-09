<?php

namespace App\Http\Controllers;

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
}
