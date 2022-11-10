<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $fillable [
        'usuario',
        'nome_completo',
        'senha',
        'cpf',
        'cep',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'num_casa',
        'endereco',
        'email',
        'filme',
    ]

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
