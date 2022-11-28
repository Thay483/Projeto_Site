<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $fillable = [
        'nome',
        'aluno_id',
        'nota',
        'professor_id',
        'desc_minima',
        'lim_min',
        'lim_max',
        'desc_completa',
    ];

}
