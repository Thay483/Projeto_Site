<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'desc_minima',
        'status',
        'lim_min',
        'lim_max',
        'id_imagem',
        'id_professor',
        'id_aluno',
        'desc_completa'
    ];
}
