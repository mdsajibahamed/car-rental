<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class Paymentcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = Payment::all();
        return view('admin.payment.index',['payments' => $payments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   
        $bookings = Booking::all();
        $payments = Payment::all();
        return view('admin.payment.create', ['bookings' => $bookings ,'payments' => $payments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        dd($request);
        // Payment::create($request->all());
        // return back()->with('info','Payment Create successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $payment)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        // dd($payment);
        // $payments = Payment::all();
        return view('admin.payment.edit',compact('payment'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
        $payment->update($request->all());
        return back()->with('warning','Updated Successfully Id : '.$payment->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        if($payment->delete()){
            return redirect()->route('payment.index')->with("warning","delete successfully Id :". $payment->id);

        }
    }
}
