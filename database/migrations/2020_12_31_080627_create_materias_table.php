<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('alunos_id')->constrained('alunos');
            // $table->bigInteger('notas_nota')->constrained('notas');
            $table->bigInteger('id_professor')->constrained('professores')->nullable();

             //id do aluno
                ->constrained('alunos')
                ->onDelete('cascade')
                ->onUpdate('cascade');
             //acho que não precisa de tabela própria
             //id do aluno (para identificar a tabela e coluna
                                              //usa-se --> nome da tabela no singular_coluna chave)
                ->constrained('professores')
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
        Schema::dropIfExists('materias');
    }
}
