<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function aluno(){
        return $this->belongsToMany('App/Models/Aluno');
    }

    public function professor(){
        return $this->belongsToMany('App/Models/Professor');
    }

}