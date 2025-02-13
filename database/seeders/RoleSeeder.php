<?php

namespace Database\Seeders;

use App\Models\Role_Permission\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $roles = ['Manager', 'Client'];
       foreach ($roles as $role) {
           Role::create(['name' =>  $role]);
       }
    }
}
