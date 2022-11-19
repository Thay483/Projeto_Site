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
            $table->id('id_professor');
            $table->foreignId('id')->contrained('user');
            $table->string('usuario');
            $table->text('nome_completo');
            $table->string('password');
            $table->string('cpf');
            $table->string('cep'); // utilizar essa informacao juntamente com a API para descobrir a moradia
            $table->integer('endereço'); //adiciona o numero junto com a rua
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
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
        Schema::dropIfExists('professores');
    }
};
