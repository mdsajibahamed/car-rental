<?php

namespace Database\Seeders;

use App\Models\Booking;
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
        $bookings =[
            ['user_id'=> '1', 'vehicle_id' =>'1', 'location_from'=> 'Dhaka','location_to' =>'Mymensingh','pickup_date'=>'06/06/2022', 'return_date'=>'07/06/2022','status'=>'1', 'total_days'=>'1','total_amount' =>'2000' ,'add_payment'=>'cash'],

            ['user_id'=> '2', 'vehicle_id' =>'2', 'location_from'=> 'Dhaka','location_to' =>'Khulna','pickup_date'=>'06/06/2022', 'return_date'=>'07/06/2022','status'=>'1',  'total_days'=>'2','total_amount' =>'3000' ,'add_payment'=>'bkash'],

            ['user_id'=> '3', 'vehicle_id' =>'3', 'location_from'=> 'Dhaka','location_to' =>'Pabna','pickup_date'=>'06/06/2022', 'return_date'=>'07/06/2022','status'=>'1', 'total_days'=>'1','total_amount' =>'2000','add_payment'=>'bkash'],
            ['user_id'=> '4', 'vehicle_id' =>'4', 'location_from'=> 'Rangpur','location_to' =>'Barisal','pickup_date'=>'06/06/2022', 'return_date'=>'07/06/2022','status'=>'1', 'total_days'=>'2','total_amount' =>'1000','add_payment'=>'nagad'],
        ];
        
        foreach ($bookings as $booking) {
          Booking::create($booking);
        }
    }
}
