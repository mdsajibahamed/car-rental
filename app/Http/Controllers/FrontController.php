<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Location;
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
        return view('front.service');
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
       

         $bookings = Booking::all();
         $locations = Location::all();
        //  dd($bookings);
        // find the vehicle 
        $vehicles = Vehicle::find($id); 
        // dd($vehicles->model);
    //    return view('front.car_detail', compact('vehicles'));
    return view('front.car_detail', ['vehicles' => $vehicles,'bookings' =>$bookings, 'locations' =>$locations]);
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
    public function invoice(){
        return view('front.invoice');
    }
    public function storebooking(Request $request){
        // dd($request);
       Booking::create($request->all());
       return back()->with('info','Booking Complate');
    }
}
