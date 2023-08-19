<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::all();
       return view('admin.vehicle_service.index', compact('services') );
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return  view('admin.vehicle_service.create');
    }

    /** 
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //   $e= Service::create($request->all());
    //   dd($e);
      $this->validate($request,[
        'title'=>"required",'highlights'=>"required",'description'=>"required|min:10|max:255",'status'=>"required",
        // 'image'=>"required|mimes:png,jpg,jpeg"
      ]);
    
    //   $imageName = '';
    //   if($image= $request->file('image')){
    //       $imageName = time(). '-'. uniqid(). '.' . $image->getClientOriginalExtension();
    //       $image->move('img/vehicle',$imageName);
    //   }

      Service::create($request->all());
      return back()->with('info', "Service Create Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        
        return "hi";
        return view('front.view',compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
       return view('admin.vehicle_service.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        // dd($request);
      $service->update($request->all());
      return redirect()->route('service.index')->with('info','Update Successfully'.$service->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
    ($service->delete());
    return redirect()->route('service.index')->with("info","delete successfully".$service->id);

        
    }
}
