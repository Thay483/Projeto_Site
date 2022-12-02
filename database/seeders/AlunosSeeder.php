<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Seeder;

class AlunosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Aluno_1',
            'email' => 'aluno1@aluno.com',
            'password' => hash::make('aluno1'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Aluno_2',
            'email' => 'aluno2@aluno.com',
            'password' => hash::make('aluno2'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Aluno_3',
            'email' => 'aluno3@aluno.com',
            'password' => hash::make('aluno3'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Aluno_4',
            'email' => 'aluno4@aluno.com',
            'password' => hash::make('aluno4'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Aluno_5',
            'email' => 'aluno5@aluno.com',
            'password' => hash::make('aluno5'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

    }
}
