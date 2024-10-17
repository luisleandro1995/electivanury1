<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToEstudiantesTable extends Migration
{
    public function up()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->string('nombre'); // Agrega la columna nombre
            $table->string('email')->unique(); // Agrega la columna email
        });
    }

    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'email']); // Elimina las columnas si se revierte la migración
        });
    }
}
