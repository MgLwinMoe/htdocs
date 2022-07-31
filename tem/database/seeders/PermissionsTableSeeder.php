<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        $permissions = [
            [
                'id'    => 1,
                'name' => 'user_management_access',
                'guard_name' => 'web',
                'description_name' => 'User Management Access',
            ],
            [
                'id'    => 2,
                'name' => 'permission_create',
                'guard_name' => 'web',
                'description_name' => 'Permission',
            ],
            [
                'id'    => 3,
                'name' => 'permission_edit',
                'guard_name' => 'web',
                'description_name' => 'Permission',
            ],
            [
                'id'    => 4,
                'name' => 'permission_show',
                'guard_name' => 'web',
                'description_name' => 'Permission',
            ],
            [
                'id'    => 5,
                'name' => 'permission_delete',
                'guard_name' => 'web',
                'description_name' => 'Permission',
            ],
            [
                'id'    => 6,
                'name' => 'permission_access',
                'guard_name' => 'web',
                'description_name' => 'Permission',
            ],
            [
                'id'    => 7,
                'name' => 'role_create',
                'guard_name' => 'web',
                'description_name' => 'Role',
            ],
            [
                'id'    => 8,
                'name' => 'role_edit',
                'guard_name' => 'web',
                'description_name' => 'Role',
            ],
            [
                'id'    => 9,
                'name' => 'role_show',
                'guard_name' => 'web',
                'description_name' => 'Role',
            ],
            [
                'id'    => 10,
                'name' => 'role_delete',
                'guard_name' => 'web',
                'description_name' => 'Role',
            ],
            [
                'id'    => 11,
                'name' => 'role_access',
                'guard_name' => 'web',
                'description_name' => 'Role',
            ],
            [
                'id'    => 12,
                'name' => 'user_create',
                'guard_name' => 'web',
                'description_name' => 'User',
            ],
            [
                'id'    => 13,
                'name' => 'user_edit',
                'guard_name' => 'web',
                'description_name' => 'User',
            ],
            [
                'id'    => 14,
                'name' => 'user_show',
                'guard_name' => 'web',
                'description_name' => 'User',
            ],
            [
                'id'    => 15,
                'name' => 'user_delete',
                'guard_name' => 'web',
                'description_name' => 'User',
            ],
            [
                'id'    => 16,
                'name' => 'user_access',
                'guard_name' => 'web',
                'description_name' => 'User',
            ],
            [
                'id'    => 17,
                'name' => 'profile_password_edit',
                'guard_name' => 'web',
                'description_name' => 'Profile',
            ],
        ];

        Permission::insert($permissions);
    }
}
