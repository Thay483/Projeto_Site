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
        Schema::create('professores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id') //nome do usuário
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->text('nome_completo');
            $table->string('cpf');
            $table->integer('cep'); // utilizar essa informacao juntamente com a API para descobrir a moradia
            $table->text('endereço'); //adiciona o numero junto com a rua
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            //$table->rememberToken();
            //$table->timestampTz('ultimo_acesso', $precision = 0); //usar isso aqui pra salvar os ultimos momentos
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
        Schema::dropIfExists('professores');
    }
};
