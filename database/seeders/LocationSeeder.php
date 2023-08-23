<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         $locations =[
         ['name' => 'Manikgonj' , 'status' =>1],
         ['name' => 'Munshigonj' , 'status' =>1],
         ['name' => 'Narayangonj' , 'status' =>1],
         ['name' => 'Kishoregonj' , 'status' =>1],
         ['name' => 'Norsingdi' , 'status' =>1],
         ['name' => 'Tangail' , 'status' =>1],
         ['name' => 'Gzipur' , 'status' =>1],
         ['name' => 'Shariatpur' , 'status' =>1],
         ['name' => 'Madaripur' , 'status' =>1],
         ['name' => 'Gopalgonj' , 'status' =>1],
         ['name' => 'Faridpur' , 'status' =>1],
         ['name' => 'Rajbari' , 'status' =>1],
         ['name' => 'Dhaka' , 'status' =>1],
         ['name' => 'Sherpur' , 'status' =>1],
         ['name' => 'Netrokona' , 'status' =>1],
         ['name' => 'Mymensingh' , 'status' =>1],
         ['name' => 'Jamalpur' , 'status' =>1],
         ['name' => 'Sylhet' , 'status' =>1],
         ['name' => 'Moulvibazer' , 'status' =>1],
         ['name' => 'Sunamgonj' , 'status' =>1],
         ['name' => 'Habigonj' , 'status' =>1],
         ['name' => 'Jhalakathi' , 'status' =>1],
         ['name' => 'Porojpur' , 'status' =>1],
         ['name' => 'Pathuakhali' , 'status' =>1],
         ['name' => 'Bhola' , 'status' =>1],
         ['name' => 'Barguna' , 'status' =>1],
         ['name' => 'Barisal' , 'status' =>1],
         ['name' => 'Khulna' , 'status' =>1],
         ['name' => 'Satkhira' , 'status' =>1],
         ['name' => 'Bagerhut' , 'status' =>1],
         ['name' => 'Jashore' , 'status' =>1],
         ['name' => 'Magura' , 'status' =>1],
         ['name' => 'Narail' , 'status' =>1],
         ['name' => 'Jhenaidha' , 'status' =>1],
         ['name' => 'Kushtia' , 'status' =>1],
         ['name' => 'Meherpur' , 'status' =>1],
         ['name' => 'Chuadanga' , 'status' =>1],
         ['name' => 'Rangpur' , 'status' =>1],
         ['name' => 'Dinajpur' , 'status' =>1],
         ['name' => 'Lalmonirhat' , 'status' =>1],
         ['name' => 'Nilphamari' , 'status' =>1],
         ['name' => 'Thakurgoan' , 'status' =>1],
         ['name' => 'Gaibandha' , 'status' =>1],
         ['name' => 'Kurigram' , 'status' =>1],
         ['name' => 'Panchagarh' , 'status' =>1],
         ['name' => 'Naogoan' , 'status' =>1],
         ['name' => 'Bogra' , 'status' =>1],
         ['name' => 'Jaypurhat' , 'status' =>1],
         ['name' => 'Chapainawabgonj' , 'status' =>1],
         ['name' => 'Natore', 'status' =>1],
         ['name' => 'Rajshahi', 'status' =>1],
         ['name' => 'Sirajgonj', 'status' =>1],
         ['name' => 'Pabna', 'status' =>1],
         ['name' => 'Chattogram', 'status' =>1],
         ['name' => 'Bandarbon', 'status' =>1],
         ['name' => 'Rangamati', 'status' =>1],
         ['name' => 'Khagrachhari', 'status' =>1],
         ['name' => 'Coxsbazer', 'status' =>1],
         ['name' => 'Comilla', 'status' =>1],
         ['name' => 'Feni', 'status' =>1],
         ['name' => 'Kalshimpur', 'status' =>1],
         ['name' => 'Brahmanbaria', 'status' =>1],
         ['name' => 'Noakhali', 'status' =>1],
         ['name' => 'Chandpur', 'status' =>1],
        ];
        foreach ($locations  as  $location) {
           Location::create($location);
        }
    }
}
