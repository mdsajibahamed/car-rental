<?php

namespace Database\Seeders;

use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       //
       $vehicles = [
        [ 'user_id' => 1, 'brand_id' => '1', 'type_id' => '1', 'model' => 'Toyota Prius','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'01900909099','price'=>'1000000','description'=>'he Prius is known for its hybrid powertrain, which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 1, 'brand_id' => '5', 'type_id' => '1', 'model' => 'Audi A3','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'01900909099','price'=>'1000000','description'=>'Audi A3: The Audi A3 is a compact luxury sedan or convertible known for its stylish design, high-quality interior, and available advanced technology features. Its available in various trims, including sportier S3 and high-performance RS3 variants.' ],

        [ 'user_id' => 1, 'brand_id' => '1', 'type_id' => '1', 'model' => 'Toyota Prius','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'014040404012','price'=>'1000000','description'=>'he Prius is known for its hybrid powertrain, which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 1, 'brand_id' => '1', 'type_id' => '1', 'model' => 'Tayota HI','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'014040404012','price'=>'2000000','description'=>'Please note that Ford may have introduced new models or made changes to existing ones since my last knowledge update in September 2021. advisable to visit the official Ford website or contact a local Ford dealership  the most up-to-date information  their car models. seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions' ],

        [ 'user_id' => 4, 'brand_id' => '3', 'type_id' => '1', 'model' => 'Ford Taurus','thumbnail'=> '','year'=> '2022','status'=>'1','seating_capacity'=>'8','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'014040404012','price'=>'1000000','description'=>'he Prius is known for its hybrid powertrain, which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 4, 'brand_id' => 3, 'type_id' => '3', 'model' => 'Ford Fusion','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'01900909099','price'=>'1000000','description'=>'The Ford Fusion is a midsize sedan that combines sleek design with a comfortable interior The Ford Fusion is a midsize sedan that combines sleek design with a comfortable interior  The Ford Fusion is a midsize sedan that combines sleek design with a comfortable interiorThe Ford Fusion is a midsize sedan that combines sleek design with a comfortable interior' ],

        [ 'user_id' => 2, 'brand_id' => '2', 'type_id' => '4', 'model' => 'Nissan X10','thumbnail'=> '','year'=> '2020','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432FF1','owner_name'=>'admin','owner_phone'=>'01900909077','price'=>'1000000','description'=>'he Prius is known for its hybrid powertrain, which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 2, 'brand_id' => '2', 'type_id' => '1', 'model' => 'Nissan YU10','thumbnail'=> '','year'=> '2019','status'=>'1','seating_capacity'=>'8','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'admin','owner_phone'=>'01900909099','price'=>'1200000 Tk','description'=>'he Prius is known for its hybrid powertrain, which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 3, 'brand_id' => '1', 'type_id' => '2', 'model' => 'Toyota Tacoma','thumbnail'=> '','year'=> '2015','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'service provider','owner_phone'=>'01900909099','price'=>'1000000','description'=>' which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],

        [ 'user_id' => 3, 'brand_id' => '1', 'type_id' => '3', 'model' => 'Toyota Avalon','thumbnail'=> '','year'=> '2018','status'=>'1','seating_capacity'=>'5','rentamount'=>'4000 Tk','image'=>'','serial_number'=>'1A4532455432DD1','owner_name'=>'sajib','owner_phone'=>'01900909088','price'=>'1600000 Tk','description'=>'which combines a gasoline engine with an electric motor and a high-capacity battery pack. This hybrid system allows the Prius to operate on electric power alone at low speeds and switch seamlessly between gasoline and electric power as needed. This results in excellent fuel efficiency and reduced emissions.' ],


       ];
       foreach ($vehicles as $vehicle) {
        Vehicle::create($vehicle);
    }

    }
}