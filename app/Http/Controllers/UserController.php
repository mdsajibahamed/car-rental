<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $users = User::all();
         return view('admin.user.index')->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $roles = Role::all();
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        // $this->validate($request,['name'=>"required|min:2|max:25",'email'=>"required|email|min:12|max:155",'password'=>"required|min:8|max:120"]);
        $user = User::create($request->all());
        if ($user) {
            $detail = new Detail($request->all());
            $user->detail()->save($detail);
        }
        return back()->with('info', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        // dd($user);
        $roles = Role::all();
        return view('admin.user.edit',compact(['user', 'roles']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // dd($request);
        $user->update($request->all());
        return redirect()->route('user.index')->with('warning','Updeted Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('warning','delete successfully');
    }
}
