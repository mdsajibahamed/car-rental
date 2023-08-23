<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            [ 'title' => 'Administrator', 'slug' => 'administrator', 'status' => 1 ],
            [ 'title' => 'Manager', 'slug' => 'manager', 'status' => 1 ],
            [ 'title' => 'Provider', 'slug' => 'provider', 'status' => 1 ],
            [ 'title' => 'Customer', 'slug' => 'customer', 'status' => 1 ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
    // php artisan migrate:fresh --seed
}
