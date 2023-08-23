<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $types =[
            [ 'title' => 'Crossvers', 'description' => '', 'status' =>1 ],
            [ 'title' => 'Sedan', 'description' => '', 'status' =>1 ],
            [ 'title' => 'Vans', 'description' => '', 'status' =>1 ],
            [ 'title' => 'Hatchbacks', 'description' => '', 'status' =>1 ],
            [ 'title' => 'Coupes', 'description' => '', 'status' =>1 ],
            [ 'title' => 'Trucks', 'description' => '', 'status' =>1 ],
        ];
        foreach ($types as $type) {
            Type::create($type);
<<<<<<< HEAD
        }
=======
        };
>>>>>>> 1c07c9c3d4074700abfde1dac7cd16cc612df971
    }
}
