<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'desc_completa',
        'desc_minima',
        'status',
        'lim_min',
        'lim_max',
        'id_imagem',
        'id_professor',
        'id_aluno',
    ];

    public function aluno(){
        return $this->belongsToMany('App/Models/Aluno');
    }

    public function professor(){
        return $this->belongsToMany('App/Models/Professor');
    }

    public function curso(){
        return $this->belongsToMany('App/Models/Curso');
    }

}
