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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique()->constrained('users'); //nome do usuário
            $table->text('nome_completo');
            $table->string('cpf');
            $table->integer('cep'); // utilizar essa informacao juntamente com a API para descobrir a moradia
            $table->text('endereço'); //adiciona o numero junto com a rua
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('filme'); //recebe o valor do filme na api (ver no github do valbert)   
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
        Schema::dropIfExists('alunos');
    }
};
