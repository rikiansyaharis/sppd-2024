<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = collect([
            'read-dashboard',
            'read-user','create-user','update-user','delete-user',
        ]);

        $this->insertPermission($permission);
    }

    private function insertPermission(Collection $permissions, $guardName = 'web'){
        Permission::insert($permissions->map(function($permission) use ($guardName){
            return [
                'name' => $permission,
                'guard_name' => $guardName,
                'created_at' => Carbon::now()
            ];
        })->toArray());
    }
    
}
