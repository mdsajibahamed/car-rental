<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Booking;
=======
>>>>>>> 1c07c9c3d4074700abfde1dac7cd16cc612df971
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
<<<<<<< HEAD
        $bookings =[
            ['user_id'=> '1', 'vehicle_id' =>'1', 'location_from'=> 'Dhaka','location_to' =>'Mymensingh','pickup_date'=>'06/06/2001', 'return_date'=>'07/06/2001','status'=>'1','total_amount' =>'2000'],

            ['user_id'=> '2', 'vehicle_id' =>'2', 'location_from'=> 'Dhaka','location_to' =>'Khulna','pickup_date'=>'06/06/2001', 'return_date'=>'07/06/2001','status'=>'1','total_amount' =>'3000'],

            ['user_id'=> '3', 'vehicle_id' =>'3', 'location_from'=> 'Dhaka','location_to' =>'Pabna','pickup_date'=>'06/06/2001', 'return_date'=>'07/06/2001','status'=>'1','total_amount' =>'2000'],
        ];
        
        foreach ($bookings as $booking) {
          Booking::create($booking);
        }
=======
>>>>>>> 1c07c9c3d4074700abfde1dac7cd16cc612df971
    }
}
