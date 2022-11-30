<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $permission1 = Permission::create(['name' => 'admin']);
        $permission2 = Permission::create(['name' => 'secretario']);
        $permission3 = Permission::create(['name' => 'aluno']);
        $permission4 = Permission::create(['name' => 'professor']);

        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'secretario']);
        $role3 = Role::create(['name' => 'aluno']);
        $role4 = Role::create(['name' => 'professor']);

    }
}
