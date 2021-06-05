<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat Permission
        $permission1 = Permission::create([
            'name' => 'create pemilih',
            'guard_name' => 'web'
        ]);

        $permission2 = Permission::create([
            'name' => 'read pemilih',
            'guard_name' => 'web'
        ]);

        $role1 = Role::find(2);
        $role2 = Role::find(3);

        $permission1->assignRole($role1);
        $role1->givePermissionTo($permission1);

        $permission2->assignRole($role1);
        $role1->givePermissionTo($permission2);

        $permission2->assignRole($role2);
        $role2->givePermissionTo($permission2);
    }
}
