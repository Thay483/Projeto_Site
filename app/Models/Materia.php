<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $table = 'materias';

    protected $fillable = [

        // 'id_aluno',
        'nome',
        // 'notas_nota',
        'desc_minima',
        'lim_min',
        'lim_max',
        'professor_id',     
        'desc_completa',
    ];

    public function alunos(){
        return $this->belongsToMany(Aluno::class);
    }
    public function professores(){
        return $this->belongsTo(Professor::class);
    }
}