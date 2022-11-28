<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Administrador;
use App\Models\Secretario;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            AdministradoresSeeder::class,
            SecretariosSeeder::class,
            AlunosSeeder::class,
            ProfessoresSeeder::class,
            NotasSeeder::class,
        ]);
    }
     

}
