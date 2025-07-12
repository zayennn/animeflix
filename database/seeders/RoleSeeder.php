<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['name' => 'user', 'description' => 'Regular user'],
            ['name' => 'petugas', 'description' => 'Staff member'],
            ['name' => 'admin', 'description' => 'Administrator'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}