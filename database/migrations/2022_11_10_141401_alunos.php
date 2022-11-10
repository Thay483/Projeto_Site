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
            $table->string('usuario');
            $table->text('nome_completo');
            $table->string('password');
            $table->string('cpf');
            $table->string('cep'); // utilizar essa informacao juntamente com a API para descobrir a moradia
            $table->integer('num_casa'); //adiciona o numero da casa para marcar a moradia do professor
            $table->string('rua');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('email')->unique();
            $table->json('filme'); //recebe o valor do filme na api (ver no github do valbert)
            $table->timestamp('email_verified_at')->nullable();    
            $table->rememberToken();
            $table->timestampTz('ultimo_acesso', $precision = 0); //usar isso aqui pra salvar os ultimos momentos
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
