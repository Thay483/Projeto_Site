<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Aluno;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{   
    public function run()
    {
        DB::table('alunos')->insert([
            'nome_completo'=>'Clarice Malu Cláudia dos Santos',
            'cpf'=>'18393596254',
            'cep'=>'64019330',
            'endereço'=>'Rua Henrique Dias, 848',
            'bairro'=>'Vermelha',
            'cidade'=>'Teresina',
            'estado'=>'Piauí',
            'filme'=>'Shrek',
        ]);

        DB::table('alunos')->insert([
            'nome_completo'=>'Hugo Marcelo Gael Alves',
            'cpf'=>'73420863802',
            'cep'=>'13412138',
            'endereço'=>'Rua Antônio Correia de Lemos, 681',
            'bairro'=>'Jardim Diamante',
            'cidade'=>'Piracicaba',
            'estado'=>'São Paulo',
            'filme'=>'UP',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Daiane Vanessa Teixeira',
            'cpf'=>'94948140880',
            'cep'=>'13804805',
            'endereço'=>'Rua dos Bem-te-vis, 705',
            'bairro'=>'Chácaras São Francisco',
            'cidade'=>'Mogi Mirim',
            'estado'=>'São Paulo',
            'filme'=>'Madagascar',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Carla Emanuelly Sandra Melo',
            'cpf'=>'07690407803',
            'cep'=>'12234856',
            'endereço'=>'Rua José de Anchieta Carvalho, 499',
            'bairro'=>'Jardim Nova República',
            'cidade'=>'São José dos Campos',
            'estado'=>'São Paulo',
            'filme'=>'Vingadores',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Lorena Lavínia Marina Castro',
            'cpf'=>'14670283804',
            'cep'=>'03541100',
            'endereço'=>'Rua Águaquente, 173',
            'bairro'=>'Vila Guilhermina',
            'cidade'=>'São Paulo',
            'estado'=>'São Paulo',
            'filme'=>'Halloween',
        ]);
        
        DB::table('alunos')->insert([
            'nome_completo'=>'Laura Sueli Pinto',
            'cpf'=>'32581192879',
            'cep'=>'18271480',
            'endereço'=>'Avenida Senador Laurindo Minhoto, 778',
            'bairro'=>'Vila Doutor Laurindo',
            'cidade'=>'Tatuí',
            'estado'=>'São Paulo',
            'filme'=>'Divergente',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Milena Simone Freitas',
            'cpf'=>'14704790878',
            'cep'=>'08773020',
            'endereço'=>'Avenida José Benedito Braga, 755',
            'bairro'=>'Vila Mogilar',
            'cidade'=>'Mogi das Cruzes',
            'estado'=>'São Paulo',
            'filme'=>'Maze Runner',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Cristiane Andrea Gonçalves',
            'cpf'=>'52962483844',
            'cep'=>'18411150',
            'endereço'=>'Rua Um, 637',
            'bairro'=>'Jardim Virgínia',
            'cidade'=>'Itapeva',
            'estado'=>'São Paulo',
            'filme'=>'Aquaman',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Caio Lucas Caldeira',
            'cpf'=>'03903446807',
            'cep'=>'13871504',
            'endereço'=>'Rua Dolorata Colozzo Sirto, 368',
            'bairro'=>'Jardim do Trevo',
            'cidade'=>'São João da Boa Vista',
            'estado'=>'São Paulo',
            'filme'=>'Toy Story',
        ]);
        DB::table('alunos')->insert([
            'nome_completo'=>'Stefany Letícia Cardoso',
            'cpf'=>'64769104855',
            'cep'=>'07434485',
            'endereço'=>'Rua Ipê, 707',
            'bairro'=>'Caputera',
            'cidade'=>'Arujá',
            'estado'=>'São Paulo',
            'filme'=>'Procurando Nemo',
        ]);

    }
}