<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToEstudiantesTable extends Migration
{
    public function up()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->string('nombre'); 
            $table->string('email')->unique(); 
        });
    }

    public function down()
    {
        Schema::table('estudiantes', function (Blueprint $table) {
            $table->dropColumn(['nombre', 'email']); 
        });
    }
}
