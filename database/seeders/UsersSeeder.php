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
        User::create([
            'name' => 'Clarice',
            'email' => 'Clarice@aluno.com',
            'password' => hash::make('Clarice'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Hugo',
            'email' => 'Hugo@aluno.com',
            'password' => hash::make('Hugo'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Daiane',
            'email' => 'Daiane@aluno.com',
            'password' => hash::make('Daiane'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Carla',
            'email' => 'Carla@aluno.com',
            'password' => hash::make('Carla'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Lorena',
            'email' => 'Lorena@aluno.com',
            'password' => hash::make('Lorena'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Laura',
            'email' => 'Laura@aluno.com',
            'password' => hash::make('Laura'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Milena',
            'email' => 'Milena@aluno.com',
            'password' => hash::make('Milena'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Cristiane',
            'email' => 'Cristiane@aluno.com',
            'password' => hash::make('Cristiane'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Caio',
            'email' => 'Caio@aluno.com',
            'password' => hash::make('Caio'),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Stefany',
            'email' => 'Stefany@aluno.com',
            'password' => hash::make('Stefany '),
        ])->givePermissionTo('aluno')->assignRole('aluno');

        User::create([
            'name' => 'Rafael',
            'email' => 'Rafael@professor.com',
            'password' => hash::make('Rafael'),
        ])->givePermissionTo('professor')->assignRole('professor');

        User::create([
            'name' => 'Nathan',
            'email' => 'Nathan@professor.com',
            'password' => hash::make('Nathan'),
        ])->givePermissionTo('professor')->assignRole('professor');

    }
}