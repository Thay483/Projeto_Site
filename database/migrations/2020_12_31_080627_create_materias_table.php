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
            $table->bigInteger('alunos_id')->constrained('alunos');
            //$table->bigInteger('id_professor')->constrained('alunos');
            $table->string('nome');
            $table->string('desc_minima');
            $table->string('lim_min');
            $table->string('lim_max');
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
