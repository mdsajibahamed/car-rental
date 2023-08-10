@extends('layouts.admin')



@section('content')

<section class="my-5 pt-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-8">
            <div class="d-flex justify-content-between">
               <h1>Add Vehicle</h1>
               <a title="back to index" style="font-size: 2em" href="{{route("vehicle.index")}}"><i class="bi bi-backspace"></i></a>
            </div>
         
            <form action="{{route('vehicle.store')}}" method="post">
               @csrf
               <div class="form-group">
                  <label for="" class="form-label">Make</label>
                  <input type="text" class="form-control" name="make" placeholder="make" value="{{old("make")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Model</label>
                  <input type="text" class="form-control" name="model" placeholder="model" value="{{old("model")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Thumbnail</label>
                  <input type="text" class="form-control" name="thumbnail" placeholder="thumbnail" value="{{old("thumbnail")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Year</label>
                  <input type="text" class="form-control" name="year" placeholder="year" value="{{old("year")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Type</label>
                  <input type="text" class="form-control" name="type" placeholder="type" value="{{old("type")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Status</label>
                  <input type="text" class="form-control" name="status" placeholder="status" value="{{old("status")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Seating Capacity</label>
                  <input type="text" class="form-control" name="seating_capacity" placeholder="seating_capacity" value="{{old("seating_capacity")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Rent Amount</label>
                  <input type="text" class="form-control" name="rentamout" placeholder="rentamount" value="{{old("rentamout")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Image</label>
                  <input type="file" class="form-control" name="image" placeholder="image" value="{{old("image")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Serial Number</label>
                  <input type="text" class="form-control" name="serial_number" placeholder="serial_number" value="{{old("serial_number")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Owner Name</label>
                  <input type="text" class="form-control" name="owner_name" placeholder="owner_name" value="{{old("owner_name")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Owner Phone</label>
                  <input type="number" class="form-control" name="owner_phone" placeholder="owner_phone" value="{{old("owner_phone")}}">
               </div>
               <div class="form-group">
                  <label for="" class="form-label mt-2">Price</label>
                  <input type="text" class="form-control" name="price" placeholder="price" value="{{old("price")}}">
               </div>
               <input type="submit" value="Insert" class="btn btn-outline-primary my-3">     
            </form>
         </div>
      </div>
   </div>
</section>
@endsection