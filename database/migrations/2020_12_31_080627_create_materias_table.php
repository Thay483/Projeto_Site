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
            $table->foreignId('aluno_id') //id do aluno
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('nota'); //acho que não precisa de tabela própria
            $table->foreignId('professor_id') //id do aluno (para identificar a tabela e coluna
                                              //usa-se --> nome da tabela no singular_coluna chave)
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nome')->unique();
            $table->string('desc_minima');
            $table->integer('lim_min');
            $table->integer('lim_max');
            $table->string('desc_completa');
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
        Schema::dropIfExists('materias');
    }
}
