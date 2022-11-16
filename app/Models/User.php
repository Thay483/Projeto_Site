<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
     protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //as funções abaixo define que a tabela user pertence ao aluno, professor, admin e secretaria
    public function aluno(){
        return $this->belongsTo('App/Models/Aluno');
    }

    public function professor(){
       return $this->belongsTo('App/Models/Professor');
   }

   public function administrador(){
       return $this->belongsTo('App/Models/Administrador');
   }

   public function secretaria(){
       return $this->belongsTo('App/Models/Secretario');
   }

}
