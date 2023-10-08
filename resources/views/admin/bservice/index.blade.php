@extends('layouts.admin')
@section('title')
{{__('Booking')}}
    
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
@endsection

@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col">
                    <div class="d-flex justify-content-between">
                        <h2>All Service Booking</h2>
                        {{-- <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a> --}}

                        <a href="" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div class="table-responsive">
                        <table id="table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>UserId </th>
                                    <th>Servicei Id</th>
                                    <th>Service Type</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    <th>Payment Type</th>
                                    <th>Date Create</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($bservices as $bservice)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$bservice->user_id}}</td>
                                    <td>{{$bservice->service_id}}</td>
                                    <td>{{$bservice->service_type}}</td>
                                    <td>{{$bservice->location}}</td>
                                    <td>{{$bservice->date}}</td>
                                    <td>{{$bservice->payment_type}}</td>
                                    <td>{{$bservice->created_at->diffforhumans()}}</td>
                                    
                                    <td >
                                        {{-- <a href=""><i class="bi bi-eye-fill"></i></a> --}}
                                        <a href="{{route('bservice.edit',$bservice->id)}}"><i class="bi bi-pencil-square"></i></a> 
                                        <form action="{{route('bservice.destroy',$bservice->id)}}" class="d-inline" method="POST">
                                            @csrf
                                            @method("delete")
                                            <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                        </form>
                                    </td>                                
                                </tr>
                                @empty
                                <tr>
                                    <td>No Data Available</td>
                                </tr>
                                @endforelse
                            </tbody>
                            
                            
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        let table = new DataTable('#table');
    </script>
    <script>
        function del(e,t){
            e.preventDefault();
            let c = confirm("Are you sure you want to delete?");
            if(!c) return;            
            t.closest('form').submit();
        }
        
    </script>

@endsection

