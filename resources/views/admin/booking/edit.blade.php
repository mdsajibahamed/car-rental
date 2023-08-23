@extends('layouts.admin')
@section('title')
{{__('Booking Edit')}}
    
@endsection
@section('content')

    <section>
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-8">
                    <div class="d-flex justify-content-between">
                        <h2>Add  Booking</h2>
                        <a href="{{ route('booking.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                    </div>
                    <div class="">
                       <form action="{{ route('booking.update',$booking->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="" class="form-label">user Id</label>
                            <input type="text" class="form-control" name="user_id" placeholder="{{ __('user_id....')}}" value="{{ $booking->user_id }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Vehicle Id</label>
                            {{-- @foreach ($vehicles as $vehicle)
                            <input  type="text" class="form-control" name="vehicle_id"  value="{{ $vehicle->id }}" {{ $vehicle->id === $booking->vehicle_id ? 'selected' : '' }} > {{ $vehicle->owner_name }} </input>
                            @endforeach --}}
                            <input type="text" class="form-control" name="vehicle_id" placeholder="{{ __('vehicle_id....')}}" value="{{ $booking->vehicle->id }}">

                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">From Location</label>
                            <input type="text" class="form-control" name="location_from" placeholder="{{ __('location_from....')}}" value="{{ $booking->location_from }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"> Location To</label>
                            <input type="text" class="form-control" name="location_to" placeholder="{{ __('location_to....')}}" value="{{ $booking->location_to }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Picked Date</label>
                            <input type="text" class="form-control" name="pickup_date" placeholder="{{ __('pickup_date....')}}" value="{{ $booking->pickup_date }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Return Date</label>
                            <input type="text" class="form-control" name="return_date" placeholder="{{ __('return_date....')}}" value="{{ $booking->return_date }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Total Day</label>
                            <input type="text" class="form-control" name="total_days" placeholder="{{ __('total_days....')}}" value="{{ $booking->total_days }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Status</label>
                            <input type="text" class="form-control" name="status" placeholder="{{ __('status....')}}" value="{{ $booking->status }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Total Amount</label>
                            <input type="text" class="form-control" name="total_amount" placeholder="{{ __('total_amount....')}}" value="{{ $booking->total_amount }}">
                        </div>
                        <input type="submit" value="Update" class="btn btn-outline-primary mt-3">
                       </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


@endsection

@section('script')
    
@endsection

