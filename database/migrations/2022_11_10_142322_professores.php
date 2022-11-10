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
            $table->text('nome_completo');  //nome da pessoa fisica
            $table->string('usuario'); //nome de usuario
            $table->string('cpf');
            $table->string('rua');
            $table->string('')
            $table->string('cep'); // utilizar essa informacao juntamente com a API para descobrir a moradia
            $table->integer('num_casa'); //adiciona o numero da casa para marcar a moradia do professor
            $table->text('avatar'); //usa o id para pegar uma imagem que vai ser salva em outro banco de dados 
            $table->timestampTz('ultimo_acesso', $precision = 0); //usar isso aqui pra salvar os ultimos momentos
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

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
