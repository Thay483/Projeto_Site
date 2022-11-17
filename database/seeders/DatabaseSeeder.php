<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        
            $user = factory(user::class)->create([
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => 'admin',
            ]);
        $user = factory(user::class)->create([
            'name' => 'Secretaria',
            'email' => 'secretaria@secretaria.com',
            'password' => 'secretaria',
        ]);
        Factory(User::class, 5)-> create();
    }
     

}
