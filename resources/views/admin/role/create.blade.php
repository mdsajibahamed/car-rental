@extends('layouts.admin')
@section('title')
{{__('User Create')}}
    
@endsection
@section('content')
    <section class="my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Add User</h2>
                        
                         <a href="{{route('role.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
                        
                    </div>
                    <div class="">
                        <form action="{{route('role.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="" class="form-label">Title</label>
                                <input type="text" class="form-control my-2" name="title" value="{{old('title')}}" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">User ID</label>
                                <input type="text" class="form-control my-2" name="user_id" value="{{old('user_id')}}" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" class="form-control my-2 " name="full_name" value="{{old('full_name')}}" >
                            </div>

                            <div class="form-group">
                                <label for="" class="form-label">Email</label>
                                <input type="text" class="form-control my-2" name="email" value="{{old('email')}}" >
                            </div>
                        
                            <div class="form-group">
                                <label for="" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control my-2 " name="mobile_number" value="{{old('mobile_number')}}" >
                            </div>
                            <div class="form-group">
                                <label for="" class="form-label">Address1</label>
                                <input type="text" class="form-control my-2 "  name="address1" value="{{old('address1')}}" >
                            </div> 
                            <div class="form-group">
                                <label for="" class="form-label">Address2</label>
                                <input type="text" class="form-control my-2 "  name="address2" value="{{old('address2')}}" >
                            </div>
                            <div class="form-group">
                            <input type="submit" value="Insert" class="btn btn-outline-primary my-3">    
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection