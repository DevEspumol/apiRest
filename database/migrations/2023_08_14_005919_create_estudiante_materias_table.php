<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudiante_materias', function (Blueprint $table) {
            $table->id()->primary_key;
            $table->Integer("IdEstudiante");
            $table->Integer("IdMateria");
            $table->Integer("IdDocente");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante_materias');
    }
};
