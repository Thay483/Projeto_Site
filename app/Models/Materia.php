<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Professor;
use App\Models\User;

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
        return $this->belongsToMany(User::class);
    }


    public function professor(){
        return $this->belongsToMany(Professor::class);
    }

}

