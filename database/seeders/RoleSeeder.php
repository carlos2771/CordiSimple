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
                'name' => 'usuario',
                'description' => 'Rol de usuario regular'
            ],
            [
                'name' => 'admin',
                'description' => 'Rol de administrador'
            ]
        ];

        // Insertar los roles en la base de datos
        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
