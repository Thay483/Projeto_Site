<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Secretario;
use Illuminate\Database\Seeder;

class SecretariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Secretario::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@secretaria.com',
            'password' => 'secretaria',
        ]);

    }
}
