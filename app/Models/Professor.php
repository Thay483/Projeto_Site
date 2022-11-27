<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

    protected $table = 'professores';

    protected $fillable = [
        'name', //nome do usuário
        'nome_completo',
        'cpf',
        'cep',
        'endereço',
        'bairro',
        'cidade',
        'estado',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function materia(){
        return $this->belongsTo('App/Models/Materia');
    }

}

