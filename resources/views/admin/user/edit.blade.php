@extends('layouts.admin')
@section('title')
    {{__('Edit User')}}
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <div class="d-flex justify-content-between">
                    <h2>Edit User</h2>
                    <a href="{{route('user.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                </div>
                <div>
                   <form action="{{route('user.update',$user->id)}}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" placeholder="{{ __('name....')}}" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="{{ __('email....')}}" value="{{$user->email}}">
                    </div>
                    
                    {{-- <div class="form-group">
                        <label for="" class="form-label">Password</label>
                        <input type="text" class="form-control" name="mobile_number" value="{{$user->password}}">
                        
                    </div> --}}
                    
                    <div class="form-group">
                        <label for="" class="form-label">User Role</label>
                        <select name="role_id" class="form-control" id="userRole">
                            <option value="">{{ __('-- User Role --') }}</option>
                            @foreach ($roles as $role)
                              <option value="{{ $role->id }}" {{ $role->id === $user->role_id ? 'selected' : '' }} >{{ $role->title }}</option>
                            @endforeach
                          </select>                        
                    </div>
                    <div class="form-group">
                       <input type="submit" value="update" class="btn btn-outline-primary mt-3">
                        
                    </div>
                    
                   </form>
                </div>

            </div>
        </div>
    </div>
</section>

@endsection