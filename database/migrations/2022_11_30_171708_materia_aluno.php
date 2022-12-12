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
        Schema::create('materia_aluno', function (Blueprint $table) {
            $table->foreignId('aluno_id')
                ->nullable() 
                ->constrained('alunos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('nota');
            $table->foreignId('materia_id')
                ->nullable() 
                ->constrained('materias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materia_aluno');
    }
};
