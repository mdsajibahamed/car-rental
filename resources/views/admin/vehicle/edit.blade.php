@extends('layouts.admin')
@section('title')
{{__('Vehicle Edit')}}
    
@endsection
@section('content')
<section class="my-5 pt-5">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-8">
             <div class="d-flex justify-content-between">
                <h1>Edit Vehicle</h1>
                <a title="back to index" style="font-size: 2em" href="{{route("vehicle.index")}}"><i class="bi bi-backspace"></i></a>
             </div>
          
             <form action="{{route("vehicle.update",$vehicle->id)}}" method="post">
                @csrf
                @method("put")
                <div class="form-group">
                  <label for="" class="form-label">User Name</label>
                  <select name="user_id" class="form-control" id="userRole">
                      <option value="">{{ __('-- User Role --') }}</option>
                      @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $user->id === $vehicle->user_id ? 'selected' : '' }} >{{ $user->name }}</option>
                      @endforeach
                    </select>                        
              </div>
              <div class="form-group">
               <label for="" class="form-label">Brand</label>
               <select name="brand_id" class="form-control" id="brand">
                   <option value="">{{ __('-- Brand Name --') }}</option>
                   @foreach ($brands as $brand)
                     <option value="{{ $brand->id }}" {{ $brand->id === $vehicle->brand_id ? 'selected' : '' }}> {{ $brand->title }}</option>
                   @endforeach
                 </select>                        
           </div>
                
                <div class="form-group">
                   <label for="" class="form-label mt-2">Model</label>
                   <input type="text" class="form-control" name="model" placeholder="model" value="{{$vehicle->model}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Thumbnail</label>
                   <input type="file" class="form-control" name="thumbnail" placeholder="thumbnail" value="{{$vehicle->thumbnail}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Year</label>
                   <input type="text" class="form-control" name="year" placeholder="year" value="{{$vehicle->year}}">
                </div>
                <div class="form-group">
                  <label for="" class="form-label">Type</label>
                  <select name="type_id" class="form-control" id="type">
                      <option value="">{{ __('-- Type Name --') }}</option>
                      @foreach ($types as $type)
                        <option value="{{ $type->id }}" {{ $type->id === $vehicle->type_id ? 'selected' : '' }} >{{ $type->title }}</option>
                      @endforeach
                    </select>                        
              </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Status</label>
                   <input type="text" class="form-control" name="status" placeholder="status" value="{{$vehicle->status}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Seating Capacity</label>
                   <input type="text" class="form-control" name="seating_capacity" placeholder="seating_capacity" value="{{$vehicle->seating_capacity}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Rent Amount</label>
                   <input type="text" class="form-control" name="rentamout" placeholder="rentamout" value="{{$vehicle->rentamount}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Image</label>
                   <input type="file" class="form-control" name="image" placeholder="image" value="{{$vehicle->image}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Serial Number</label>
                   <input type="text" class="form-control" name="serial_number" placeholder="serial_number" value="{{$vehicle->serial_number}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Owner Name</label>
                   <input type="text" class="form-control" name="owner_name" placeholder="owner_name" value="{{ $vehicle->owner_name }}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Owner Phone</label>
                   <input type="number" class="form-control" name="owner_phone" placeholder="owner_phone" value="{{$vehicle->owner_phone}}">
                </div>
                <div class="form-group">
                   <label for="" class="form-label mt-2">Price</label>
                   <input type="text" class="form-control" name="price" placeholder="price" value="{{$vehicle->price}}">
                </div>
                <input type="submit" value="Update" class="btn btn-outline-primary my-3">     
             </form>
          </div>
       </div>
    </div>
 </section>
    
@endsection