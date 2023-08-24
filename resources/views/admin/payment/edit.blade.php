@extends('layouts.admin')
@section('title')
    {{__('Payment')}}
@endsection
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-10">

                <div class="d-flex justify-content-between">
                    <h2>Add  Booking</h2>
                    <a href="{{ route('payment.index')}}" title="Back to Index" style="font-size: 2rem"><i class="bi bi-backspace"></i></a>
        
                </div> 
                <div>
                    <form action="{{ route('payment.update',$payment->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="" class="form-label">Booking Id</label>
                            <input type="text" class="form-control" name="booking_id" placeholder="{{ __('booking_id....')}}" value="{{ $payment->booking_id}}">
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Payment Date</label>
                            {{-- @foreach ($vehicles as $vehicle)
                            <input  type="text" class="form-control" name="vehicle_id"  value="{{ $vehicle->id }}" {{ $vehicle->id === $booking->vehicle_id ? 'selected' : '' }} > {{ $vehicle->owner_name }} </input>
                            @endforeach --}}
                            <input type="text" class="form-control" name="payment_date" placeholder="{{ __('payment_date....')}}" value="{{ $payment->payment_date }}">
            
                        </div>
                        <div class="form-group">
                            <label for="" class="form-label">Payment Type</label>
                            <input type="text" class="form-control" name="payment_type" placeholder="{{ __('payment_type....')}}" value="{{ $payment->payment_type }}">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="" class="form-label">Transection Id </label>
                            <input type="text" class="form-control" name="trxid" placeholder="{{ __('trxid....')}}" value="{{ $payment->trxid }}">
                        </div>
                        
                        <div class="form-group">
                            <label for="" class="form-label">Amount </label>
                            <input type="text" class="form-control" name="amount" placeholder="{{ __('amount....')}}" value="{{ $payment->amount }}">
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