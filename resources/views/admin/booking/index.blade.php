@extends('layouts.admin')
@section('title')
{{__('Bokking')}}
    
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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
                        <table id="table" class="table table-striped">
                            <thead>
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
                            </thead>
                            <tbody>
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
@endsection
