<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $fillable=['Primer_Nombre','Segundo_Nombre','Primer_Apellido','Segundo_Apellido','grado','idEstudiante'];

}
