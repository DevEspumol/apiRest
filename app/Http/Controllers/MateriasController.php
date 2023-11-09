<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\materias;
class MateriasController extends Controller
{
    function getMaterias(){
        $materias=Materias::all();
        /*$usuarioModel = new Usuario([
            'nombre' => $usuarioAPI['nombre'],
            'email' => $usuarioAPI['email'],
            // ... otros atributos
        ]);*/



        return response()->json($materias, 200);
    }




}
