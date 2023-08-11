@extends('layouts.admin')
@section('title')
{{__('  ')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="d-flex justify-content-center">
                        <h2>Show Vehicle</h2>
                        {{-- <a href="{{route('vehicle.create')}}" title="add new vehicle" class="" style="font-size:2rem"><i class="bi bi-plus-circle"></i></a> --}}
                    </div>
                    <div>
                       <form action="">
                            <label for="">Make</label><br>
                            <strong>{{$vehicle->make}}</strong><br>
                            <label for="">Model</label><br>
                            <strong>{{$vehicle->model}}</strong><br>
                            <label for="">Thumbnail</label><br>
                            <strong>{{$vehicle->thumbnail}}</strong><br>
                            <label for="">Type</label><br>
                            <strong>{{$vehicle->type}}</strong><br>
                            <label for="">Seating Capacity</label><br>
                            <strong>{{$vehicle->seating_capacity}}</strong><br>
                            <label for="">Owner Name</label><br>
                            <strong>{{$vehicle->owner_name}}</strong><br>
                            <label for="">Owner Phone</label><br>
                            <strong>{{$vehicle->owner_phone}}</strong>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

