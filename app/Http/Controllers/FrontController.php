<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function home() {
        
        $vehicles = Vehicle::all();
        return view('front.home', compact('vehicles'));
    }
    //
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
        
        $vehicles = Vehicle::all();
        return  view('front.car_detail',compact('vehicle'));
    }
    //
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
}
