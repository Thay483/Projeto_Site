<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aluno;
use App\Models\Professor;
use App\Models\User;


class AlunoMateria extends Model
{
    use HasFactory;
    
    protected $table = "aluno_materia";

    protected $fillable = [
        'nota',    
    ];


}
