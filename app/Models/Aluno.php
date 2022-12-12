<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'nome_completo',
            'cpf',
            'cep',
            'endereço',
            'bairro',
            'cidade',
            'estado',
            'filme',
    ];

    //aqui diz que o relacionamento é de n:n da tabela alunos para usuários
    //ou melhor, vários alunos tem vários usuários (o aluno é o próprio usuário)
    // public function users(){
    //     return $this->belongsToMany('App/Models/User');
    // }

    public function materias(){
        return $this->belongsToMany(Materia::class);
    }

}
