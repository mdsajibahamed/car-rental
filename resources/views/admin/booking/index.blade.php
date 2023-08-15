@extends('layouts.admin')
@section('title')
{{__('Bokking')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-10">
                    <div class="d-flex justify-content-between">
                        <h2>All Booking</h2>
                        {{-- <a href="" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a> --}}

                        <a href="{{ route('booking.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a>
                    </div>
                    <div>
                        <table class="table table-striped">
                            <tr>
                                <th>SL</th>
                                <th>Detail Id</th>
                                <th>Vehicle Name</th>
                                <th>Picked Location</th>
                                <th>Drop Location</th>
                                <th>Total Amount</th>
                                <th>Date Create</th>
                                <th>Action</th>
                            </tr>
                            @forelse ($bookings as $book)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $book->detail_id }}</td>
                                <td>{{ $book->vehicle_id }}</td>
                                <td>{{$book->location_from}}</td>
                                <td>{{$book->location_to}}</td>
                                <td>{{$book->total_amount}}</td>
                                <td>{{ $book->created_at->diffforhumans() }}</td>
                                <td >
                                    <a href=""><i class="bi bi-eye-fill"></i></a>
                                     <a href=""><i class="bi bi-pencil-square"></i></a> 
                                     <form action="" class="d-inline" method="POST">
                                         @csrf
                                         @method("delete")
                                         <a href="#" class="bi bi-trash3-fill" onclick="del(event,this)"></a>
                                     </form>
                                 </td>
                                @empty
                                <tr>
                                    <td>No Data Available</td>
                                </tr>
                                @endforelse
                              
                            </tr>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

