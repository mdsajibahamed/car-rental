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
        //
        $users = [
            [ 'role_id' => 1, 'name' => 'Sajib Ahmed', 'email' => 'sajib@gmail.com', 'password' => Hash::make('admin') ],
            [ 'role_id' => 1, 'name' => 'Administrator', 'email' => 'admin@gmail.com', 'password' => Hash::make('admin') ],
            [ 'role_id' => 2, 'name' => 'Manager', 'email' => 'manager@gmail.com', 'password' => Hash::make('manager') ],
            [ 'role_id' => 3, 'name' => 'Service Provider', 'email' => 'provider@gmail.com', 'password' => Hash::make('provider') ],
            [ 'role_id' => 4, 'name' => 'Customer', 'email' => 'customer@gmail.com', 'password' => Hash::make('customer') ],
        ];

       foreach ($users as $user) {
        User::crete($user);
       }
    }
}
