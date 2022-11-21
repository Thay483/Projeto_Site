<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
        User::create([
            'name' => 'Secretaria',
            'email' => 'secretaria@secretaria.com',
            'password' => Hash::make('secretaria'),
        ])->givePermissionTo('secretario');

    }
}
