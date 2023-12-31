<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Type;
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
        // return $vehicles;
        $brands = Brand::all();
        // ->paginate(config('vehi.perpage'));
        return view('admin.vehicle.index',compact('vehicles','brands'));



        // return view('admin.vehicle.index',compact('vehicles'));
    }

    /**
     * Show the form for creating a new resource.
     */ 
    public function create()
    {
        $types = Type::all();
        $users = User::all();
        $brands = Brand::all();
        return view('admin.vehicle.create',compact('users','brands','types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     //dd($request);
    //     // $this->validate($request,[
             
    //     //     'model' =>"required|min:5|max:25",
    //     //     // 'thumbnail'  =>"min:2|max:20",
    //     //     'year' =>"required|min:1|max:10",'status'=>"required",'seating_capacity'=>"required|min:1|max:30",'rentamount'=>"required|max:30",'serial_number'=>"required|min:5|max:100",'owner_name'=>"required|min:2|max:25",'owner_phone'=>"required|min:5|max:100",'price'=>"required|min:2|max:30",
    //     //     'thumbnail'=>"required|mimes:png,jpg,jpeg",
    //     //     'image'=> "required|mimes:png,jpg,jpeg"
    //     // ]);
        
       
    //     // $vehicle = new Vehicle;
    //     // $vehicle->model = $request->input('model');
    //     // $vehicle->year = $request->input('year');
    //     // $vehicle->status = $request->input('status');
    //     // $vehicle->seating_capacity = $request->input('seating_capacity');
    //     // $vehicle->rentamount = $request->input('seating_capacity');
    //     // $vehicle->serial_number = $request->input('serial_number');
    //     // $vehicle->owner_name = $request->input('owner_name');
    //     // $vehicle->owner_phone = $request->input('owner_phone');
    //     // $vehicle->price = $request->input('price');
    //     // $vehicle->price = $request->input('price');
    //     // if($request->hasFile('thumbnail')){
    //     //     $file =$request->file('thumbnail');
    //     //         $extention = $file->getClientOriginalExtension();
    //     //         $filename = time().'.'.$extention;
    //     //         $file->move('img/vehicle',$filename);
    //     //         $vehicle->thumbnail = $filename;
    //     // }
    //     // $vehicle->save();
    //     $vehicle = new Vehicle;
    //     // Fill the vehicle model with other fields
    //     // $vehicle->save();
    
    //     if ($request->hasFile('thumbnail')) {
    //         $thumbnailPath = $request->file('thumbnail')->store('public','photo');
    //         $vehicle->thumbnail = $thumbnailPath;
          
    //     }


        
    //     // if($thumbnail= $request->file('thumbnail')){
    //     //     $thumbnailName = time(). '-'. uniqid(). '.' . $thumbnail->getClientOriginalExtension();
    //     //     $thumbnail->move('img/vehicle',$thumbnailName);
    //     // }
          
    //     // $imageName = '';
    //     // if($image = $request->file('image')){
    //     //     $imageName = time(). '-'. uniqid(). '.' . $image->getClientOriginalExtension();
    //     //     $image->move('img/vehicle',$imageName);
    //     // }

    //      Vehicle::create($request->all());

    //      return redirect()->route('vehicle.index')->with('success','successfully added');

    //     //  Vehicle is database 
    // }
    public function store(Request $request) {
        // 
        // dd($request);
        try {
            $vehicle = Vehicle::create($request->all());
        
            if ($request->hasFile('thumbnail')) {
                $thumbnailFile = $request->file('thumbnail');
                $thumbnailName = time() . '.' . $thumbnailFile->getClientOriginalExtension();
                $thumbnailPath = $thumbnailFile->storeAs('public/photo', $thumbnailName);
        
                $vehicle->thumbnail = $thumbnailPath;
                $vehicle->save();
            }
        
            return redirect()->route('vehicle.index')->with('info','Vehicle Added Successfully');
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error: ' . $e->getMessage()], 500);
        }
        
        // $vehicle = Vehicle::create($request->all());
        // if ($request->hasFile('thumbnail')) {
        // //   $thumbnailPath = $request->file('thumbnail')->store('public','photo');
        // //   $vehicle->thumbnail = $thumbnailPath;
        //     $thumbnailFile = $request->file('thumbnail');
        //     $thumbnailName = time(). '.' . $thumbnailFile->getClientOriginalExtension();
        //     $thumbnail = $thumbnailFile->storeAs('/photo',$thumbnailName);

        //     $vehicle->thumbnail = $thumbnail;
        //     $vehicle->save();
        // }
        // return "Successfull";
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
        $types = Type::all();
        $brands = Brand::all();
        $users = User::all();
        return view('admin.vehicle.edit',compact('vehicle','brands','users','types'));


        // ->with("vehicle",$vehicle);
        
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
