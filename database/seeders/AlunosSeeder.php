<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\str;
use Illuminate\Support\Facades\DB;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run(){
        for ($i=0; $i <= 9; $i++){
            DB::table('users')->insert([
                    // 'id' => "$i",
                    'name' => "aluno$i",
                    'email' => "aluno$i@gmail.com",
                    'password'=>Hash::make('aluno'),
            ])->givePermissionTo('aluno');
        }
        
        for ($i=0; $i <= 9; $i++){
            DB::table('alunos')->insert([
                // 'user_id'=> "$i",
                'nome_completo' => "aluno$i",
                'cpf'=>"$i$i$i$i$i$i$i$i$i$i",
                'cep'=>"$i$i$i$i$i$i$i$i",
                'endereço'=>"casa do aluno$i",
                'bairro'=>"bairro do aluno$i",
                'cidade'=>"cidade do aluno$i",
                'estado'=>"estado do aluno$i",
                'filme'=>"Shrek",
            ]);
        };        
    }   
}
