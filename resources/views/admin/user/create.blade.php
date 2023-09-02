@extends('layouts.admin')
@section('title')
    {{__('User create')}}
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Create User</h2>
                        <a href="{{route('user.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                    </div>
                    <div>
                        <form action="{{route('user.store')}}" method="POST" >
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Role Id</label>
                                <select name="role_id" class="form-select" id="">
                                @forelse ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->title }}</option>
                                @empty
                                    <option value="">{{ __('-- Choose One --') }}</option>
                                @endforelse
                               </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="{{ __('name....')}}" value="{{old('name')}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">email</label>
                                <input type="text" class="form-control" name="email" placeholder="{{ __('email....') }}" value="{{old('email')}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Date of Birth</label>
                                <input type="text" class="form-control" name="date_of_birth" placeholder="{{ __('date_of_birth....') }}" value="{{old('date_of_birth')}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Gender</label>
                                <select name="gender" id="" class="form-control">
                                    <option value="Male">select option</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="mobile_number" placeholder="{{ __('mobile_number....') }}" value="{{old('mobile_number')}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"> Address1</label>
                                <input type="text" class="form-control" name="address1" placeholder="{{ __('address1....') }}" value="{{old('address1')}}">
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label"> Address2</label>
                                <input type="text" class="form-control" name="address2" placeholder="{{ __('address2....') }}" value="{{old('address2')}}">
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="{{ __('password....') }}" value="{{old('password')}}">
                            </div>
                            <input type="submit" value="create" class="btn btn-outline-primary my-3">

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

