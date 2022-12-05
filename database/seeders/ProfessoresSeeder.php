<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Professor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class ProfessoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professores')->insert([
            'nome_completo'=>'Rafael Murilo César Campos',
            'cpf'=>'15698520810',
            'cep'=>'14806470',
            'endereço'=>'Rua Lazaro Mendes Ferreira, 697',
            'bairro'=>'Jardim Indaiá',
            'cidade'=>'Araraquara',
            'estado'=>'São Paulo',
            
        ]);

        DB::table('professores')->insert([
            'nome_completo'=>'Nathan Henrique Souza',
            'cpf'=>'48091272812',
            'cep'=>'02253055',
            'endereço'=>'Travessa Alpatacal, 636',
            'bairro'=>'Vila Gustavo',
            'cidade'=>'São Paulo',
            'estado'=>'São Paulo',
            
        ]); 
    }
}
