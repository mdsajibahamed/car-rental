<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types = Type::all();
        return  view('admin.type.index',compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $this->validate($request,['title'=>"required|min:2|max:25",'description'=>"required|min:10"]);
       Type::create($request->all());
     return redirect()->route('type.create')->with('info','Type Create Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        // dd($type);
        return view('admin.type.edit')->with('type',$type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        // dd($request);
        $this->validate($request,['title'=>"required|min:2|max:25",'description'=>"required|min:10|max:150"]);
        $type->update($request->all());
        return redirect()->route('type.index')->with('info','Type Updated Successfully :'.$type->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();
        return redirect()->route('type.destroy')->with('warning','Delete Successfully : ' .$type->id);

    }
}
