<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Administrador;
use Illuminate\Database\Seeder;

class AdministradoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Administrador::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 'admin',
        ]);

    }
}
