<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $roles = Role::all();
         return view('admin.role.index',)->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view ('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,['title'=>"required|min:2|max:25",'description'=>"required|min:50|max:255"]);
       Role::create($request->all());
       return redirect()->route('role.create')->with("info","Role Create Successfully");
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
       return view('admin.role.single')->with('role',$r);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
    //    dd($role);
        return view('admin.role.edit')->with("role",$role);
        // return "hi";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $this->validate($request,['title'=>"required|min:2|max:25",'description'=>"required|min:50|max:255"]);
        $role->update($request->all());
        return back()->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
    //   dd($role);
    $role->delete();
    return redirect()->route('role.index')->with('warning','delete successfully');
    }
}
