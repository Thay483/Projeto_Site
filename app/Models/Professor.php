<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
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
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function users(){
        return $this->belongsToMany('App/Models/User');
    }

}

