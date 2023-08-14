<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        // variable  database data 
        $vehicles =Vehicle::all(); 
        // ->paginate(config('vehi.perpage'));
        return view('admin.vehicle.index')->with('vehicles',$vehicles);



        // return view('admin.vehicle.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $brands = Brand::all();
        return view('admin.vehicle.create',compact('users','brands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
             'make'  =>"min:2|max:20",
            'model' =>"required|min:5|max:20"
        ],[
         'make.min' =>':attribute You must be minimum length 10',
         'model.min'=>':attribute You must be minimum length 5'
        ]);
         Vehicle::create($request->all());
         return redirect()->route('vehicle.index')->with('success','successfully added');

        //  Vehicle is database 
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle)
    {
    //   $vehicle = Vehicle::all();
    
        return view('admin.vehicle.single')->with('vehicle',$vehicle);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        // dd($vehicle);
        $brands = Brand::all();
        $users = User::all();
        return view('admin.vehicle.edit',compact('vehicle','brands','users'));
        //->with("vehicle",$vehicle);
        
        // return view("category.edit")
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    { 
        // $vehicle->make =$request->make;
        // $vehicle->model = $request->model;
        // if($vehicle->save()){
            $vehicle->update($request->all());
        return redirect()->route('vehicle.index')->with("info","Updated Successfully ,Id :".$vehicle->id);
        // return "hi";
        // dd($vehicle);
        // dd($request);

        // }
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
