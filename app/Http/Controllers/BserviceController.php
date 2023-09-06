<?php

namespace App\Http\Controllers;

use App\Models\Bservice;
use Illuminate\Http\Request;

class BserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bservices = Bservice::all();
      return view('admin.bservice.index',['bservices' =>$bservices]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
        // dd($request);
        $this->validate($request,[
            'location' => "required",'user_id' => "required",'service_id' => "required", 'date' => "required",'service_type' => "required",
        ]);
        Bservice::create($request->all());
        return back()->with('info', 'Booking Submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bservice $bservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bservice $bservice)
    {
    //   dd($bservice);
    //   $bservices = Bservice::all();
      return view('admin.bservice.edit',compact('bservice'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bservice $bservice)
    {
        $bservice->update($request->all());
        return redirect()->route('bservice.index')->with('info','Updated Successfully : '.$bservice->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bservice $bservice)
    {
        if($bservice->delete()){
            return back()->with('warning','Deleted Successfully  Id : '.$bservice->id);
        }
    }
}
