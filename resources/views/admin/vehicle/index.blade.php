@extends('layouts.admin')


@section('content')


    <sction class="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                       <div class="d-flex justify-content-between">
                        <h3>All Vehicles</h3>
                        <a href="{{route('vehicle.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                        </div>
                 
                        <div>
                             <table class="table table-striped">
                             <colgroup>
                                 <col>
                                 <col>
                                 <col>
                                 <col style="width: 20%;">
                             </colgroup>
                             <tr>
                                 <th>Make </th>
                                 <th>Model</th>
                                 <th>Thumbnail</th>
                                 <th>Type</th>
                                 <th>Seating Capacity</th>
                                 <th>Owner Name</th>
                                 <th>Action</th>
                             </tr>

                            
                                @forelse ($vehicles as $vehicle)
                                  <tr>
                                     <td>{{$vehicle->make}}</td>
                                     <td>{{$vehicle->model}}</td>
                                     <td>{{$vehicle->thumbnail}}</td>
                                     <td>{{$vehicle->type}}</td>
                                     <td>{{$vehicle->seating_capacity}}</td>
                                     <td>{{$vehicle->owner_name}}</td>
                                     <td style="text-align: center">
                                         <a href="{{route("vehicle.show",$vehicle->id)}}"><i class="bi bi-eye-fill"></i></i></a>
                                         <a href="{{route("vehicle.edit",$vehicle->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                         <form action="{{route('vehicle.destroy', $vehicle->id)}}" method="POST" class="d-inline">
                                         @csrf
                                         @method("delete")
                                         {{-- <button type="submit"><i class="bi bi-trash3-fill"></i></button> --}}
                                         <a href="#" onclick="del(event, this)"><i class="bi bi-trash3-fill"></i></a>
                                         </form> 
                                       </td>
                                  </tr>
                                @empty 
                                
                               @endforelse 
                              
                             
                             </table>
                     </div>
                </div>

            
            
            </div>
        </div>
    </section>


@endsection

@section('script')
    <script>
        function del(e,t){
            e.preventDefault();
            let c = confirm("Are you sure you want to delete?");
            if(!c) return;            
            t.closest('form').submit();
        }
    </script>
@endsection