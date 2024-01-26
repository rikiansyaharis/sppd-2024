<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developer = Role::create([
            'name' => 'Developer',
            'guard_name' => 'web',
        ]);

        $administrator = Role::create([
            'name' => 'Administrator',
            'guard_name' => 'web',
        ]);

        // $staff = Role::create([
        //     'name' => 'Karyawan',
        //     'guard_name' => 'web',
        // ]);

        $developer->givePermissionTo([
            'read-dashboard',
            'read-user','create-user','update-user','delete-user',
        ]);

        $administrator->givePermissionTo([
            'read-dashboard',
            'read-user','create-user','update-user','delete-user',
        ]);

        // $staff->givePermissionTo([
        //     'read-dashboard',
        // ]);
    }
}
