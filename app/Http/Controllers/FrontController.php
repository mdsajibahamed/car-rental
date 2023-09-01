<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Location;
use App\Models\Review;
use App\Models\User;
use App\Models\Service;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    //
    public function home() {

        // $user_id = Auth::user()->role_id;
        // if($user_id =='1'){

            $services = Service::all();
            $vehicles = Vehicle::all();
            return view('front.home', compact('vehicles','services'));
        // }else{
        //     return view('front.car_list');
        // }
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
    public function booking(){
        return view('front.booking');

    }
   
    //
    public function carDetails (Request $request, $id) {
        // dd($id);
          
        $reviews = Review::orderBy('created_at','desc')->paginate('5');
         $bookings = Booking::all();
         $locations = Location::all();
        //  dd($bookings);
        // find the vehicle 
        $vehicles = Vehicle::find($id); 
        return view('front.car_detail', ['vehicles' => $vehicles,'bookings' =>$bookings, 'locations' =>$locations,'reviews'=>$reviews ,'vehicles'=>$vehicles]);
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
        $vehicles = Vehicle::all();
        return view('front.car_list',['vehicles'=>$vehicles]);
    }
    public function invoices(Request $request, $id){
        // dd($request);
        $services = Service::find($id);
        
        return view('front.invoice',['services' =>$services]);
    }

    public function storebooking(Request $request){
        $vehicles = Vehicle::all();
        // dd($request);
        $this->validate($request,[
            'location_from'=>"required",'location_to'=> "required", 'pickup_date' => "required",'return_date' => "required"
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

    public function uvehicle(){
        return view('front.uvehicle');
    }
}
