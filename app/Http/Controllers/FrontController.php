<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Location;
use App\Models\Review;
use App\Models\Service;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function home() {
        $services = Service::all();
        $vehicles = Vehicle::all();
        return view('front.home', compact('vehicles','services'));
    }
    //
        public function views($id){
        return view ('view' );
        }



    public function about() {
        return view('front.about');
    }
    //
    public function service(){
        $services= Service::all(); 
        return view('front.service', compact('services'));
    }
    //
    public function contact(){
        return view('front.contact');
    } 
    //
    public function detail(Vehicle $vehicle){
        //  return "hi";
        // return view('front.view',compact('vehicle'));
        return view('front.car_detail', compact('vehicle'));
    }
    //

    //
    public function carDetails (Request $request, $id) {
        // dd($id);
    
        $reviews = Review::orderBy('created_at','desc')->paginate('5');
         $bookings = Booking::all();
         $locations = Location::all();
        //  dd($bookings);
        // find the vehicle 
        $vehicles = Vehicle::find($id); 
        // dd($vehicles->model);
    //    return view('front.car_detail', compact('vehicles'));
    return view('front.car_detail', ['vehicles' => $vehicles,'bookings' =>$bookings, 'locations' =>$locations,'reviews'=>$reviews]);
    }


    public function booking(){
        return view('front.booking');

    }
    //
    public function team(){
        return view('front.team');

    }
    //
    public function testimonial(){
        return view('front.testimonial');
    }
    //
    public function car_list(){
        return view('front.car_list');
    }
    public function invoices(Request $request, $id){
        // dd($request);
        $services = Service::find($id);
        
        return view('front.invoice',['services' =>$services]);
    }

    // public function storebooking(Request $request)
    // {
    //     $earlier = new \DateTime($request->pickup_date);
    //     $later = new \DateTime($request->return_date);
    
    //     $abs_diff = $later->diff($earlier)->days + 1;
    
    //     // Retrieve the selected vehicle's rent amount
    //     $selectedVehicle = Vehicle::find($request->vehicle_id);
    
    //     if (!$selectedVehicle) {
    //         // Handle the case where the selected vehicle is not found
    //         return back()->with('error', 'Selected vehicle not found.');
    //     }
    
    //     // Check if rentamount is a numeric value
    //     if (!is_numeric($selectedVehicle->rentamount)) {
    //         return back()->with('error', 'Invalid rent amount for the selected vehicle.');
    //     }
    
    //     $rentAmount = $selectedVehicle->rentamount;
    
    //     // Check if abs_diff is a numeric value
    //     if (!is_numeric($abs_diff)) {
    //         return back()->with('error', 'Invalid number of days.');
    //     }
    
    //     // Calculate the total amount based on the rent amount and number of days
    //     $totalAmount = $rentAmount * $abs_diff;
    
    //     // Store the total amount and total days in the request data
    //     $request->merge(['total_amount' => $totalAmount, 'total_days' => $abs_diff]);
    
    //     // Create the booking record with the updated request data
    //     Booking::create($request->all());
    
    //     return back()->with('info', 'Booking Complete');
    // }
    

   

    public function storebooking(Request $request){
        $vehicles = Vehicle::all();
        // dd($request);
        $this->validate($request,[
            'location_from'=>"required",'location_to'=>"required",'pickup_date' => "required",'return_date'=>"required",'add_payment'=>"required"
        ]);
        $earlier = new \DateTime($request->pickup_date);
        $later = new \DateTime($request->return_date);

        $abs_diff = $later->diff($earlier)->format("%a") + 1;

    //    (array_merge($request->all(),['total_days'=>$abs_diff]));
    //     dd($request->all());
    //   $request->total_days = $abs_diff;

    
     

       Booking::create(array_merge($request->all(),['total_days'=>$abs_diff]));
       
       return back()->with('info','Booking Complate');
    }
}
