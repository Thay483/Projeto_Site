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

    //aqui diz que o relacionamento é de n:n da tabela alunos para usuários
    //ou melhor, vários alunos tem vários usuários (o aluno é o próprio usuário)
    public function users(){
        return $this->belongsToMany('App/Models/User');
    }

    public function cursos(){
        return $this->belongsToMany('App/Models/Curso');
    }

}
