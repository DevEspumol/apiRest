<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EstudianteController extends Controller
{
    /*
     public function getSumConsumoInsumoById(Request $request){
        $request->validate([
            'idInsumo'=>'required'
        ]);
        $CantidadTotal=RegistroEntregas::where('idInsumo',$request->idInsumo)
        ->sum('Cantidad');

        return response()->json($CantidadTotal, 200);
    }

*/

public function getEstudiantesByIdMateria(Request $request){
    $request->validate ([
        'IdMateria'=>'required',
        'Curso'=>'required'
    ]);
    $inventario = DB::select('SELECT * FROM estudiantemateriavista WHERE id = :idMateria and grado= :curso',
     [
        'idMateria' => $request->IdMateria,
        'curso' => $request->Curso,
     ]);
    return response()->json($inventario, 200);

}

function getAllMateriasEstudiantes(){
    $inventario=DB::select('Select * from estudiantemateriavista');
    return response()->json($inventario, 200);
}



function getEstudiantesByIdMateriaa(Request $request){

}

}
