<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secretaria extends Model
{
    use HasFactory;

    //aqui diz que o relacionamento é de 1:1 da tabela secretarias para usuários
    //ou melhor, que cada secretario tem um usuário (o secretario é o próprio usuário)
    public function users(){
        return $this->hasOne('App/Models/User');
    }

}
