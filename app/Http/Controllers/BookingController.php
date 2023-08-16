<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Detail;
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
        $vehicles = Vehicle::all();
        $details = Detail::all();
        return view('admin.booking.create',compact('details','vehicles')); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,['location_from'=>"required|min:2|max:50",'location_to'=>"required|min:2|max:50",'total_days'=>"required|min:1",'status'=>"required",'total_amount'=>"required"]);
      Booking::create($request->all()); 
      return redirect()->route('booking.create')->with('info','Create Successfully');
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
        $details = Detail::all();
        $vehicles = Vehicle::all();
      return view('admin.booking.edit',compact('booking','details','vehicles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
       $booking->update($request->all());
       return redirect()->route('booking.index')->with('warning',' Booking Updated Successfully Id :'.$booking->id);
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
