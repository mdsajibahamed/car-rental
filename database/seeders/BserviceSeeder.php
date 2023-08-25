<?php

namespace Database\Seeders;

use App\Models\Bservice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BserviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $bservices = [
            ['user_id' => 2 , 'service_id' => 1, 'service_type'=>'painting','date'=>'09/08/2023','location'=>'dhaka','payment_type'=>'bkash'],
            ['user_id' => 2 , 'service_id' => 2, 'service_type'=>'refinancing','date'=>'09/08/2023','location'=>'saver','payment_type'=>'nagad'],
            ['user_id' => 2 , 'service_id' => 3, 'service_type'=>'cleaning','date'=>'10/08/2023','location'=>'saver','payment_type'=>'nagad'],
            ['user_id' => 2 , 'service_id' => 3, 'service_type'=>'repairing','date'=>'10/08/2023','location'=>'dhaka','payment_type'=>'cash'],
            ['user_id' => 2 , 'service_id' => 5, 'service_type'=>'inspections','date'=>'11/08/2023','location'=>'dhaka','payment_type'=>'bkash'],
        ];
        foreach ($bservices as $bservice) {
            Bservice::create($bservice);
        }
    }
}
