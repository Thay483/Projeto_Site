<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $fillable = [
        // 'id_aluno',
        'nome',
        // 'notas_nota',
        'desc_minima',
        'lim_min',
        'lim_max',
        'id_professor',
        'desc_completa',
    ];

    public function aluno(){
        return $this->belongsToMany('App/Models/Aluno');
    }

    public function professor(){
        return $this->belongsToMany('App/Models/Professor');
    }

}
