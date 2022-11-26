<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;


    protected $fillable = [
        'alunos_id',
        'nome',
        'notas_nota',
        'desc_minima',
        'lim_min',
        'lim_max',
        //'id_professor',
        //'id_imagem',
        'desc_completa',
    ];

    public function aluno(){
        return $this->belongsToMany('App/Models/Aluno');
    }

    // public function professor(){
    //     return $this->belongsToMany('App/Models/Professor');
    // }

}
