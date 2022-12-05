<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\Administrador;
use App\Models\Secretario;
use App\Models\Aluno;
use App\Models\User;
use App\Models\Materia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
       {
                //estamos passando um array
                //aqui estamos informando as novas classes Seeders criadas
                $this->call([
                PermissionsSeeder::class,
                MateriasSeeder::class,
                AlunosSeeder::class,
                AdministradoresSeeder::class,
                SecretariosSeeder::class,
                UsersSeeder::class,       
                //ProfessoresSeeder::class,
                //NotasSeeder::class,
                ]);
        }
}
