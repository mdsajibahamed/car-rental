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
                        <h2>Edit  Booking</h2>
                        <a href="{{ route('bservice.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>

                    </div>
                    <div class="">
                       <form action="{{route('bservice.update',$bservice->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="" class="form-label">user Id</label>
                            <input type="text" class="form-control" name="user_id" placeholder="{{ __('user_id....')}}" value="{{$bservice->user_id}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Services Id</label>
                            {{-- @foreach ($vehicles as $vehicle)
                            <input  type="text" class="form-control" name="vehicle_id"  value="{{ $vehicle->id }}" {{ $vehicle->id === $booking->vehicle_id ? 'selected' : '' }} > {{ $vehicle->owner_name }} </input>
                            @endforeach --}}
                            <input type="text" class="form-control" name="service_id" placeholder="{{ __('service_id....')}}" value="{{ $bservice->service_id }}">

                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Service Type</label>
                            <input type="text" class="form-control" name="service_type" placeholder="{{ __('service_type....')}}" value="{{ $bservice->service_type }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"> Location </label>
                            <input type="text" class="form-control" name="location" placeholder="{{ __('location....')}}" value="{{ $bservice->location}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label"> Date</label>
                            <input type="text" class="form-control" name="date" placeholder="{{ __('date....')}}" value="{{ $bservice->date }}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Payment Type</label>
                            <input type="text" class="form-control" name="payment_type" placeholder="{{ __('payment_type....')}}" value="{{ $bservice->payment_type }}">
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

