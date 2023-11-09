<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
#use App\Http\Controllers\Api\LoginController;

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login']);
#Route::post('loginUser  ', 'LoginController@login');
Route::post('registrer',[App\Http\Controllers\Api\LoginController::class, 'registrerNewUser']);

Route::get('materias',[App\Http\Controllers\MateriasController::class,'getMaterias']);


Route::get('getAllMateriasEstudiantes',[App\Http\Controllers\EstudianteController::class,'getAllMateriasEstudiantes']);
Route::get('getEstudiantesByIdMateria',[App\Http\Controllers\EstudianteController::class,'getEstudiantesByIdMateria']);



Route::post('saveRecordNewProfesor',[App\Http\Controllers\ProfesorController::class,'saveRecordNewProfesor']);

// almacenar Asistencia

Route::get('registrarAsistencia',[App\Http\Controllers\AsistenciaController::class,'setAsistenciaEstudiante']);

Route::get('getAsistenciasEntregasByDate',[App\Http\Controllers\AsistenciaController::class,'getHistorialAsistenciasByDate']);
Route::get('getAsistencia',[App\Http\Controllers\AsistenciaController::class,'getAllAsistencia']);
//getHistorialEntregasByDate

//se obtiene la falla de estudiantes
Route::get('getFallasEstudiantes',[App\Http\Controllers\AsistenciaController::class,'getFallasEstudiantes']);
Route::get('getCantidadFallasEstudiantes',[App\Http\Controllers\AsistenciaController::class,'getCantidadFallasEstudiantes']);
?>
