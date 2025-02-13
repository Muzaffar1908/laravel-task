<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'Manager',
                'first_name' => 'Muzaffar',
                'last_name' => 'Akhmadaliyev',
                'email' => 'manager@gmail.com',
                'password' => 'password',
                'role_id' => 1,
                'phone_number' => '+998949923343',
            ],
            [
                'username' => 'Client',
                'first_name' => 'Doniyorbek',
                'last_name' => 'Akhmadaliyev',
                'email' => 'client@gmail.com',
                'password' => 'password',
                'role_id' => 2,
                'phone_number' => '+998990670525',
            ]
        ];

        foreach ($users as $user) {
            User::firstOrCreate(
                ['email' => $user['email']],
                [
                    'username' => $user['username'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                    'password' => Hash::make($user['password']),
                    'role_id' => $user['role_id'],
                    'phone_number' => $user['phone_number'],
                ]
            );
        }
    }
}
