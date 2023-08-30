<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Detail;
use App\Models\Location;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('admin.booking.index',compact('bookings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{   
        $users = User::all();
        $locations =Location::all();
        $vehicles = Vehicle::all();
        $details = Detail::all();
        return view('admin.booking.create',compact('details','vehicles','users','locations')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,['location_from'=>"required|min:2|max:50",'pickup_date' => "required", 'return_date'=>"required", 'user_id' =>"required",'location_to'=>"required|min:2|max:50"]);
        $earlier = new \DateTime($request->pickup_date);
        $later = new \DateTime($request->return_date);

        $abs_diff = $later->diff($earlier)->format("%a") + 1;

    //    (array_merge($request->all(),['total_days'=>$abs_diff]));
    //     dd($request->all());
    //   $request->total_days = $abs_diff;

    
     

       Booking::create(array_merge($request->all(),['total_days'=>$abs_diff]));
       
       return back()->with('info','Booking Complate');
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        // $bookings =Booking::all();
        $users = User::all();
        $details = Detail::all();
        $vehicles = Vehicle::all();
      return view('admin.booking.edit',compact('booking','details','vehicles','users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
         
       $booking->update($request->all());
    //    return redirect()->route('booking.index')->with('warning',' Booking Updated Successfully Id :'.$booking->id);
       return back()->with('warning',' Booking Updated Successfully Id :'.$booking->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        if($booking->delete()){
            return redirect()->route('booking.index')->with("info","delete successfully Id :". $booking->id);

        }
    }
}
