<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin1',
                'email' => 'prueba1@gmail.com',
                'password' => '1234'
            ],
            [
                'name' => 'admin2',
                'email' => 'prueba2@gmail.com', 
                'password' => '1234'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
