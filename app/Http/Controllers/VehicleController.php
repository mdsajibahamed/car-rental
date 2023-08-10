<?php

namespace App\Http\Controllers;

use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {  
        $vehicle =Vehicle::all(); 
        // ->paginate(config('vehi.perpage'));
        return view('admin.vehicle.index')->with('vehicle',$vehicle);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'make'=>"required|min:10|max:20",
            'model'=>"required|min:5|max:20"
        ],[
         'make.min' =>':attribute You must be minimum length 10',
         'model.min'=>':attribute You must be minimum length 5'
        ]);
         Vehicle::create($request->all());
         return redirect()->route('vehicle.index')->with('success','successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        return view('admin.vehicle.edit');
        //->with("vehicle",$vehicle);
        
        // return view("category.edit")
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        if($vehicle->delete()){
            return redirect()->route('vehicle.index')->with("info","delete successfully".$vehicle->id);

        }
    }
}
