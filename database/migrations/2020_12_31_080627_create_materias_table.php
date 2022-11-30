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
            $table->bigInteger('id_professor')->constrained('alunos')->nullable();

            $table->string('nome')->unique();
            $table->string('desc_minima');
            $table->integer('lim_min');
            $table->integer('lim_max');
            $table->string('desc_completa');
            $table->integer('status')->nullable();
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
