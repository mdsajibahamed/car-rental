@extends('layouts.admin')
@section('title')
{{__('Service Edit')}}
@endsection
@section('content')
<section class="my-5 pt-5">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-10">
            <div class="d-flex justify-content-between">
               <h1>Edit Service</h1>
               <a title="back to index" style="font-size: 2em" href="{{route('service.index')}}"><i class="bi bi-backspace"></i></a>
            </div>
         
               <form action="{{ route('service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                   @csrf   
                   @method('put') 
                   <div class="form-group">
                    <label for=""  class="form-label mt-2">title</label>
                     <input type="text" class="form-control" name="title" value="{{ $service->title}}">
                 </div>
                 <div class="form-group">
                    <label for="" class="form-label mt-2">Description</label>
                    <input type="text" name="description" value="{{ $service->description}}" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for="" class="form-label mt-2">Highlights</label>
                    <input type="text" class="form-control" name="highlights" value="{{ $service->highlights}}">
                 </div>
                 <div class="form-group">
                    <label for="" class="form-label mt-2">Price</label>
                    <input type="text" class="form-control" name="price" value="{{ $service->price}}">
                 </div>
                 <div class="form-group">
                    <label for="" class="form-label mt-2">Status</label>
                    <input type="text" class="form-control" name="status" value="{{ $service->status}}">
                 </div>
                 <div class="form-group">
                    <label for="" class="form-label mt-2">Image</label>
                    <input type="file" class="form-control" name="image" value="{{ $service->image}}">
                 </div>
                 <input type="submit" value="Update" class="btn btn-outline-primary mt-3">


               </form>
         </div>
      </div>
   </div>
</section>
@endsection
