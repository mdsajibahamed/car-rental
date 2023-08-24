<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $services = [
            ['title' =>'Vehicle Refinancing','highlights'=>'Hot', 'description'=>'Car refinancing is a process that allows you to apply for a new auto loan to replace your existing loan. The main purpose of refinancing is to change your loan terms.','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Repairing','highlights'=>'Hot', 'description'=>'An automobile repair shop (also known regionally as a garage or a workshop) is an establishment where automobiles are repaired by auto mechanics and technicians. ','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Wasing','highlights'=>'Hot', 'description'=>'A car wash, or auto wash is a facility used to clean the exterior, and in some cases the interior, of cars. Car washes can be self-service, full-service with attendants who wash the vehicle','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Cleaning','highlights'=>'Hot', 'description'=>'Cleaning Vehicle cleaning, often referred to as car detailing or auto detailing, is the process of cleaning, restoring, and preserving the appearance of a vehicle, whether its a car, truck, motorcycle, or any other type of motorized vehicle.','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Painting','highlights'=>'Hot', 'description'=>'Find a covered, ventilated, low-dust, safe place to do the job. To safely and skillfully paint a car, youll need an enclosed workspace with excellent
            Take safety seriously when gathering your supplies. When you head to the home center, paint shop, and/or auto parts store to pick up the sprayer, primer','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Scheduled Maintenance','highlights'=>'Hot', 'description'=>'Usually, basic car maintenance involves checking or replacing parts like spark plugs, wires, fluids, and serpentine belts. Scheduling maintenance services through your dealer may be best.','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle Inspection','highlights'=>'Hot', 'description'=>'ehicle inspection refers to the process of evaluating the condition and safety of a motor vehicle. It is typically carried out by government agencies, private inspection stations, or automotive professionals to ensure that vehicles','price'=>'1000000','status'=>1],
            ['title' =>'Vehicle IWheel and Rim Repairs ','highlights'=>'Hot', 'description'=>'Alloy Wheels: Most modern vehicles come equipped with alloy wheels. These wheels are made from a mixture of aluminum and other metals, providing a lightweight yet durable option.','price'=>'1000000','status'=>1],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
