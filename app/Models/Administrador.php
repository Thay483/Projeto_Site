<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    //aqui diz que o relacionamento é de 1:1 da tabela administradores para usuários
    //ou melhor, que cada administrador tem um usuário (o administrador é o próprio usuário)
    public function users(){
        return $this->hasOne('App/Models/User');
    }
}
