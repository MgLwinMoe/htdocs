<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_permissions = Permission::all();
        Role::findOrFail(1)->givePermissionTo($admin_permissions);
        $user_permissions = $admin_permissions->filter(function ($permission) {
            return substr($permission->name, 0, 5) != 'user_' && substr($permission->name, 0, 5) != 'role_' && substr($permission->name, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->givePermissionTo($user_permissions);
    }
}
