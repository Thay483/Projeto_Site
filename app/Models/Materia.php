<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;

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

    public function users(){
        return $this->belongsToMany('App/Models/User');
    }

    public function alunos(){
        return $this->belongsToMany(Aluno::class);
    }


    public function professor(){
        return $this->belongsToMany('App/Models/Professor');
    }

}

