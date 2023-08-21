 @extends('layouts.admin')
 @section('title')
 {{__('Service Add')}}
 @endsection
 @section('content')
 <section class="my-5 pt-5">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-10">
             <div class="d-flex justify-content-between">
                <h1>Service List </h1>
                <a title="back to index" style="font-size: 2em" href="{{route('service.index')}}"><i class="bi bi-backspace"></i></a>
             </div>
          
                <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf   
                    <div class="form-group">
                     <label for=""  class="form-label mt-2">title</label>
                     <select class="form-select" name="title"  id="" >
                        <option value="Car Rental">Car Rental</option>
                        <option value="Car Financing">Car Financing</option>
                        <option value="Car Inspection">Car Inspection</option>
                        <option value="Auto Repairing">Auto Repairing</option>
                        <option value="Auto Painting">Auto Painting</option>
                        <option value="Auto Clening">Auto Clening</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label mt-2">Description</label>
                     <input type="text" name="description" value="{{old('description')}}" class="form-control">
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label mt-2">Highlights</label>
                     <input type="text" class="form-control" name="highlights" value="{{old('highlights')}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label mt-2">Price</label>
                     <input type="text" class="form-control" name="price" value="{{old('price')}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label mt-2">Status</label>
                     <input type="text" class="form-control" name="status" value="{{old('status')}}">
                  </div>
                  <div class="form-group">
                     <label for="" class="form-label mt-2">Image</label>
                     <input type="file" class="form-control" name="image" value="{{old('image')}}">
                  </div>
                  <input type="submit" value="insert" class="btn btn-outline-primary mt-3">


                </form>
          </div>
       </div>
    </div>
 </section>
 @endsection
