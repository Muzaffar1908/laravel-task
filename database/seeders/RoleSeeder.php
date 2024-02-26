<?php

namespace Database\Seeders;

use MIMAXUZ\LRoles\Models\XRoles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        XRoles::insert([
            [
                'name' => 'Manager',
                'slug' => 'manager'
            ],
            [
                'name' => 'Client',
                'slug' => 'client'
            ],
        ]);
    }
}
