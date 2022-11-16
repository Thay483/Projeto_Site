<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario',
        'nome_completo',
        'senha',
        'cpf',
        'cep',
        'endereço',
        'bairro',
        'cidade',
        'estado',
        'endereco',
        'email',
        'filme',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //aqui diz que o relacionamento é de 1:1 da tabela alunos para usuários
    //ou melhor, que cada aluno tem um usuário (o aluno é o próprio usuário)
    public function users(){
        return $this->hasOne('App/Models/User');
    }

}
