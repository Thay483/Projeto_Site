<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    
    public function run()
    {
        $user=User::create([
            'name' => 'Clarice',
            'email' => 'Clarice@aluno.com',
            'password' => hash::make('Clarice'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            
            'nome_completo'=>'Clarice Malu Cláudia dos Santos',
            'cpf'=>'18393596254',
            'cep'=>'64019330',
            'endereço'=>'Rua Henrique Dias, 848',
            'bairro'=>'Vermelha',
            'cidade'=>'Teresina',
            'estado'=>'Piauí',
            'filme'=>'Shrek',
        ]);

      

        $user = User::create([
            'name' => 'Hugo',
            'email' => 'Hugo@aluno.com',
            'password' => hash::make('Hugo'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Hugo Marcelo Gael Alves',
            'cpf'=>'73420863802',
            'cep'=>'13412138',
            'endereço'=>'Rua Antônio Correia de Lemos, 681',
            'bairro'=>'Jardim Diamante',
            'cidade'=>'Piracicaba',
            'estado'=>'São Paulo',
            'filme'=>'UP',
        ]);

       $user=User::create([
            'name' => 'Daiane',
            'email' => 'Daiane@aluno.com',
            'password' => hash::make('Daiane'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Daiane Vanessa Teixeira',
            'cpf'=>'94948140880',
            'cep'=>'13804805',
            'endereço'=>'Rua dos Bem-te-vis, 705',
            'bairro'=>'Chácaras São Francisco',
            'cidade'=>'Mogi Mirim',
            'estado'=>'São Paulo',
            'filme'=>'Madagascar',
        ]);

        $user=User::create([
            'name' => 'Carla',
            'email' => 'Carla@aluno.com',
            'password' => hash::make('Carla'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Carla Emanuelly Sandra Melo',
            'cpf'=>'07690407803',
            'cep'=>'12234856',
            'endereço'=>'Rua José de Anchieta Carvalho, 499',
            'bairro'=>'Jardim Nova República',
            'cidade'=>'São José dos Campos',
            'estado'=>'São Paulo',
            'filme'=>'Vingadores',
        ]);

        $user=User::create([
            'name' => 'Lorena',
            'email' => 'Lorena@aluno.com',
            'password' => hash::make('Lorena'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Lorena Lavínia Marina Castro',
            'cpf'=>'14670283804',
            'cep'=>'03541100',
            'endereço'=>'Rua Águaquente, 173',
            'bairro'=>'Vila Guilhermina',
            'cidade'=>'São Paulo',
            'estado'=>'São Paulo',
            'filme'=>'Halloween',
        ]);

        $user=User::create([
            'name' => 'Laura',
            'email' => 'Laura@aluno.com',
            'password' => hash::make('Laura'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Laura Sueli Pinto',
            'cpf'=>'32581192879',
            'cep'=>'18271480',
            'endereço'=>'Avenida Senador Laurindo Minhoto, 778',
            'bairro'=>'Vila Doutor Laurindo',
            'cidade'=>'Tatuí',
            'estado'=>'São Paulo',
            'filme'=>'Divergente',
        ]);

        $user=User::create([
            'name' => 'Milena',
            'email' => 'Milena@aluno.com',
            'password' => hash::make('Milena'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Milena Simone Freitas',
            'cpf'=>'14704790878',
            'cep'=>'08773020',
            'endereço'=>'Avenida José Benedito Braga, 755',
            'bairro'=>'Vila Mogilar',
            'cidade'=>'Mogi das Cruzes',
            'estado'=>'São Paulo',
            'filme'=>'Maze Runner',
        ]);

        $user=User::create([
            'name' => 'Cristiane',
            'email' => 'Cristiane@aluno.com',
            'password' => hash::make('Cristiane'),
        ])->givePermissionTo('aluno')->assignRole('aluno');
        
        $user->alunos()->create([
            'nome_completo'=>'Cristiane Andrea Gonçalves',
            'cpf'=>'52962483844',
            'cep'=>'18411150',
            'endereço'=>'Rua Um, 637',
            'bairro'=>'Jardim Virgínia',
            'cidade'=>'Itapeva',
            'estado'=>'São Paulo',
            'filme'=>'Aquaman',
        ]);

        $user=User::create([
            'name' => 'Caio',
            'email' => 'Caio@aluno.com',
            'password' => hash::make('Caio'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Caio Lucas Caldeira',
            'cpf'=>'03903446807',
            'cep'=>'13871504',
            'endereço'=>'Rua Dolorata Colozzo Sirto, 368',
            'bairro'=>'Jardim do Trevo',
            'cidade'=>'São João da Boa Vista',
            'estado'=>'São Paulo',
            'filme'=>'Toy Story',
        ]);

        $user=User::create([
            'name' => 'Stefany',
            'email' => 'Stefany@aluno.com',
            'password' => hash::make('Stefany '),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        $user->alunos()->create([
            'nome_completo'=>'Stefany Letícia Cardoso',
            'cpf'=>'64769104855',
            'cep'=>'07434485',
            'endereço'=>'Rua Ipê, 707',
            'bairro'=>'Caputera',
            'cidade'=>'Arujá',
            'estado'=>'São Paulo',
            'filme'=>'Procurando Nemo',
        ]);

        $user=User::create([
            'name' => 'Rafael',
            'email' => 'Rafael@professor.com',
            'password' => hash::make('Rafael'),
        ])->givePermissionTo('professor')->assignRole('professor');

        $user->professores()->create([
            'nome_completo'=>'Rafael Murilo César Campos',
            'cpf'=>'15698520810',
            'cep'=>'14806470',
            'endereço'=>'Rua Lazaro Mendes Ferreira, 697',
            'bairro'=>'Jardim Indaiá',
            'cidade'=>'Araraquara',
            'estado'=>'São Paulo',   
        ]);

        $user=User::create([
            'name' => 'Nathan',
            'email' => 'Nathan@professor.com',
            'password' => hash::make('Nathan'),
        ])->givePermissionTo('professor')->assignRole('professor');

        $user->professores()->create([
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