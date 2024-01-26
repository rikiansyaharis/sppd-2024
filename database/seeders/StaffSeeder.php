<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::insert([
            [
                'userable_type' => User::class,
                'userable_id' => 1,
                'username' => 'Root',
                'email' => 'root@gmail.com',
                'gender' => 'Male',
                'phone' => '081239409783',
                'address' => '123 Main Street',
                'nip' => '09876545678987',
                'nik' => '09876545678',
                'bank_id' => 2,
                'account_number' => '9876556532',
                'image' => 'default.png',
            ],
            [
                'userable_type' => User::class,
                'userable_id' => 2,
                'username' => 'Sarah',
                'email' => 'sarah@gmail.com',
                'gender' => 'Female',
                'phone' => '081239409783',
                'address' => '123 Main Street',
                'nip' => '09876545678987',
                'nik' => '09876545678',
                'bank_id' => 4,
                'account_number' => '9876556532',
                'image' => 'default.png',
            ],

        ]);
    }
}
