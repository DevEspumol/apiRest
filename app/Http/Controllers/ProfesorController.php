<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profesor;
class ProfesorController extends Controller
{
    public function saveRecordNewProfesor(Request $request){
        $data= $request->validate([
            'Nombre'=>'required',
            'Apellido'=>'required',
            'Codigo'=>'required'
        ]);
        $empleado=Profesor::create($data);
        return response()->json([
            'message'=>'Success'
        ], 200);
  }
}
