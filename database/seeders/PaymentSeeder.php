<?php

namespace Database\Seeders;

use App\Models\Payment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $payments = [
            ['booking_id' =>'1','payment_date'=>'06/05/2020','payment_type' =>'cash','trxid' =>'Aj112KJHKJH22','amount' =>'1000'],
            ['booking_id' =>'2','payment_date'=>'09/05/2020','payment_type' =>'bkash','trxid' =>'BJ112KJHKJH22','amount' =>'2000'],
            ['booking_id' =>'3','payment_date'=>'12/05/2020','payment_type' =>'nagad','trxid' =>'KK112KJHKJH22','amount' =>'1500'],
            ['booking_id' =>'4','payment_date'=>'15/05/2020','payment_type' =>'bkash','trxid' =>'MK112KJHKJH22','amount' =>'2000'],
            ['booking_id' =>'3','payment_date'=>'25/05/2020','payment_type' =>'nagad','trxid' =>'PP112KJHKJH22','amount' =>'1000'],
        ];
        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}
