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
            // for ($i=0; $i <= 9; $i++){
            //     DB::table('users')->insert([
            //             'id' => "$i"
            //             'name' => "aluno$i",
            //             'email' => "aluno$i@gmail.com",
            //             'password'=>Hash::make('aluno'),
            //     ])->givePermissionTo('aluno');
            // }
            
            // for ($i=0; $i <= 9; $i++){
            //     DB::table('users')->insert([
            //             'id' => "$i"
            //             'name' => "professor$i",
            //             'email' => "professor$i@gmail.com",
            //             'password'=>Hash::make('professor'),
            //     ])->givePermissionTo('professor');
    }
}
