<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            [
                'name' => 'Jean',
                'prenom' => 'Dupont',
                'email' => 'jean.dupont@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Marie',
                'prenom' => 'Martin',
                'email' => 'marie.martin@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Pierre',
                'prenom' => 'Durand',
                'email' => 'pierre.durand@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Sophie',
                'prenom' => 'Bernard',
                'email' => 'sophie.bernard@example.com',
                'password' => Hash::make('password123'),
            ],
            [
                'name' => 'Lucas',
                'prenom' => 'Moreau',
                'email' => 'lucas.moreau@example.com',
                'password' => Hash::make('password123'),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}