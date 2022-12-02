<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        $permission1 = Permission::create(['name' => 'admin']);
        $permission2 = Permission::create(['name' => 'secretario']);
        $permission3 = Permission::create(['name' => 'aluno']);
        $permission4 = Permission::create(['name' => 'professor']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('admin');
        $permission1->assignRole('admin');

        $role2 = Role::create(['name' => 'secretario']);
        $role2->givePermissionTo('secretario');
        $permission2->assignRole('secretario');

        $role3 = Role::create(['name' => 'aluno']);
        $role3->givePermissionTo('aluno');
        $permission3->assignRole('aluno');

        $role4 = Role::create(['name' => 'professor']);
        $role4->givePermissionTo('professor');
        $permission4->assignRole('professor');

    }
}