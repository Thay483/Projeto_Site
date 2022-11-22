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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->text('desc_completa'); //descricao completa do curso
            $table->text('desc_minima'); //descricao minima do curso
            $table->text('nome'); //nome completo do curso
            $table->integer('status'); //status do curso vai puxar de outra tabela 
            $table->integer('lim_min'); //limite minimo de pessoas no curso
            $table->integer('lim_max'); //limite maximo de pessoas no curso
            $table->integer('id_imagem'); //puxa o id da imagem de outra tablea
            //$table->integer('id_prof') -> NULLABLE; //professor que pode ter nada
            //$table->BigInteger('professor_id')->unsigned();
            $table->rememberToken();

            //$table->foregey('professor_id')->references('id')->on('professor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
};
