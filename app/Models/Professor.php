<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Materia;
use App\Models\Aluno;
use App\Models\User;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';

    protected $fillable = [
        'user_id', //nome do usuário
        'nome_completo',
        'cpf',
        'cep',
        'endereço',
        'bairro',
        'cidade',
        'estado',
    ];

    public function materias(){
        return $this->belongsToMany(Materia::class);
    }

}

