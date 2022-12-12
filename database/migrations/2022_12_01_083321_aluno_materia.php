<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration 
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_materia', function (Blueprint $table) {
        $table->foreignId('aluno_id')->constrained('alunos')->onDelete('cascade');
        $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade');
        $table->float('notas')->nullable()->onDelete('cascade');
        $table->timestamps();
        });
        
    }
      

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno_materias');
    }
};
