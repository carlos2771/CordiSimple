<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definir los roles
        $roles = [
            [
                'name' => 'user',
                'description' => 'regular user role'
            ],
            [
                'name' => 'admin',
                'description' => 'administrator role'
            ]
        ];

        // Insertar los roles en la base de datos
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
