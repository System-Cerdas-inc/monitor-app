<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name' => 'admin',
                'title' => 'Admin',
                'status' => 1,
                'permissions' => ['role','role-add', 'role-list', 'permission', 'permission-add', 'permission-list']
            ],
            [
                'name' => 'user',
                'title' => 'User',
                'status' => 1,
                'permissions' => []
            ],
            [
                'name' => 'operator',
                'title' => 'Operator',
                'status' => 1,
                'permissions' => []
            ],
            [
                'name' => 'pimpinan',
                'title' => 'Pimpinan',
                'status' => 1,
                'permissions' => []
            ],
        ];

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Role::truncate();

        foreach ($roles as $key => $value) {
            $permission = $value['permissions'];
            unset($value['permissions']);
            $role = Role::updateOrCreate($value);
            $role->givePermissionTo($permission);
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
