<?php

namespace App\Http\Controllers;
use App\Models\Detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details = Detail::all();
        return view('admin.user.index')->with('details',$details);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,[
              'full_name'=>"required|string|min:2|max:20|unique:users,name",
              'address2'=>"required|string|min:10|max:255"
             ]);
        Detail::create($request->all());
        return redirect()->route('user.create')->with('info',"user crate successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Detail $detail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {

        dd($detail);
        // return view('admin.user.edit',compact('detail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        // $detail->update($request->all());
        // return redirect()->route('user.index')->with("info","Updated Successfully ,Id :".$detail->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
