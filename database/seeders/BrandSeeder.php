<?php

namespace Database\Seeders;
<<<<<<< HEAD
use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

=======

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;
>>>>>>> 1c07c9c3d4074700abfde1dac7cd16cc612df971
class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $brands = [
            ['title' => 'Toyota' ,'description' => ' Toyota is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Nissan' ,'description' => 'Nissan is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Ford' ,'description' => 'Ford is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Hyundai' ,'description' => 'Hyundai is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Audi' ,'description' => 'Audi is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Kia' ,'description' => 'Kia is  most popular vehicle brand in world' , 'status' => 1],
            ['title' => 'Tesla' ,'description' => 'Tesla is  most popular vehicle brand in world' , 'status' => 1],
        ];
        foreach ($brands as $brand) {
            Brand::create($brand);
        }
<<<<<<< HEAD

=======
>>>>>>> 1c07c9c3d4074700abfde1dac7cd16cc612df971
    }
}
