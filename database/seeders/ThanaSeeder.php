<?php

namespace Database\Seeders;

use App\Models\Thana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $thanas = [
            ['title' => 'Amtali', 'slug' => 'Amtali' , 'status' => '1'],
            ['title' => 'Bamna', 'slug' => 'Bamna' , 'status' => '1'],
            ['title' => 'Barguna Sadar', 'slug' => 'Barguna Sadar' , 'status' => '1'],
            ['title' => 'Betagi', 'slug' => 'Betagi' , 'status' => '1'],
            ['title' => 'Patharghata', 'slug' => 'Patharghata' , 'status' => '1'],
            ['title' => 'Taltali', 'slug' => 'Betagi' , 'status' => '1'],
            ['title' => 'Muladi', 'slug' => 'Betagi' , 'status' => '1'],
            ['title' => 'Babuganj', 'slug' => 'Babuganj' , 'status' => '1'],
            ['title' => 'Agailjhara', 'slug' => 'Agailjhara' , 'status' => '1'],
            ['title' => 'Barisal Sadar', 'slug' => 'Barisal Sadar' , 'status' => '1'],
            ['title' => 'Bakerganj', 'slug' => 'Bakerganj' , 'status' => '1'],
            ['title' => 'Banaripara', 'slug' => 'Banaripara' , 'status' => '1'],
            ['title' => 'Gaurnadi', 'slug' => 'Gaurnadi' , 'status' => '1'],
            ['title' => 'Hizla', 'slug' => 'Gaurnadi' , 'status' => '1'],
            ['title' => 'Mehendiganj', 'slug' => 'Gaurnadi' , 'status' => '1'],
            ['title' => 'Wazirpur', 'slug' => 'Gaurnadi' , 'status' => '1'],
        ];
        foreach ($thanas as  $thana) {
            Thana::create($thana);
        }
    }
}
